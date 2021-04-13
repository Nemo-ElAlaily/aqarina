<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Property\PropertyCreateRequest;
use App\Http\Requests\Admin\Property\PropertyUpdateRequest;
use App\Models\Admin\Agency;
use App\Models\Admin\City;
use App\Models\Admin\Country;
use App\Models\Admin\Currency;
use App\Models\Admin\Feature;
use App\Models\Admin\Property;
use App\Models\Admin\PropertyStatus;
use App\Models\Admin\PropertyType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image as Image;
use Ramsey\Uuid\Exception\UnableToBuildUuidException;

class PropertyController extends Controller
{
    public function __construct()
    {
        $this -> middleware(['permission:read_properties'])->only('index');
        $this -> middleware(['permission:create_properties'])->only(['create', 'store']);
        $this -> middleware(['permission:update_properties'])->only(['edit', 'update']);
        $this -> middleware(['permission:delete_properties'])->only(['destroy']);
    } // end of construct

    public function index(Request $request)
    {
        $agencies = Agency::all();

        $properties = Property::when($request -> search , function ($query) use ($request) {
            return $query -> whereTranslationLike('name',    '%' . $request -> search . '%');
        })->when($request -> agency_id , function($query) use ($request) {
            return $query -> where('agency_id', $request -> agency_id);
        })->latest()->paginate(PAGINATION_COUNT);

        return view('admin.properties.index', compact('properties', 'agencies'));

    } // end of index

    public function create()
    {
        $countries = Country::all();
        $cities = City::all();
        $property_types = PropertyType::all();
        $property_statuses = PropertyStatus::all();
        $agencies = Agency::all();
        $currencies = Currency::all();
        return view('admin.properties.create',
               compact('countries', 'cities', 'property_types', 'property_statuses', 'agencies', 'currencies'));

    } // end of create

    public function store(Request $request)
    {
        // set active
        $request -> has('is_active') ? $request -> request -> add(['is_active' => 1]) : $request -> request -> add(['is_active' => 0]);
        $request -> has('is_featured') ? $request -> request -> add(['is_featured' => 1]) : $request -> request -> add(['is_featured' => 0]);
        $request -> has('add_to_home') ? $request -> request -> add(['add_to_home' => 1]) : $request -> request -> add(['add_to_home' => 0]);
        // for rent for sale feature
        if(!$request -> has('rent_sale') || $request -> rent_sale == 'sale')
        {
            $request -> request -> add(['rent_sale' => 0]);
        } else {
            $request -> request -> add(['rent_sale' => 1]);
        }

        $request_data = $request -> all();

        if ($request -> image) {
            Image::make($request->image)->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('/uploads/properties/'. $request ->image->hashName()));

            $request_data['image'] = $request->image->hashName();
        }

        if($request -> gallery){
            $gallery_arr = [];
            foreach ( $request -> gallery as $index => $item){
                $gallery_arr += [$index => $item ->hashName(),];
                Image::make($item)->resize(500, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('/uploads/properties/gallery/'. $item -> hashName()));
            }
            $request_data['gallery'] = json_encode($gallery_arr);
        }

        Property::create($request_data);

        session()->flash('success', 'Property Added Successfully');
        return redirect()->route('admin.properties.index');

       // return $request -> all();
    } // end of store

    public function edit(Property $property)
    {
        $countries = Country::all();
        $cities = City::all();
        $property_types = PropertyType::all();
        $property_statuses = PropertyStatus::all();
        $agencies = Agency::all();
        $currencies = Currency::all();

        return view('admin.properties.edit',
            compact('property', 'countries', 'cities', 'property_types', 'property_statuses', 'agencies', 'currencies'));

    } // end of edit

    public function update( Request $request, Property $property)
    {
        $rules = [];

        foreach (config('translatable.locales') as $locale) {
            $rules += [
                $locale . '.name' => ['required', Rule::unique('property_translations', 'name')->ignore($property->id, 'property_id')],
            ];
        } // end of for each

        $request -> validate($rules);

        // set active
        $request -> has('is_active') ? $request -> request -> add(['is_active' => 1]) : $request -> request -> add(['is_active' => 0]);
        $request -> has('is_featured') ? $request -> request -> add(['is_featured' => 1]) : $request -> request -> add(['is_featured' => 0]);
        $request -> has('add_to_home') ? $request -> request -> add(['add_to_home' => 1]) : $request -> request -> add(['add_to_home' => 0]);
        // for rent for sale feature
        if(!$request -> has('rent_sale') || $request -> rent_sale == 'sale')
        {
            $request -> request -> add(['rent_sale' => 0]);
        } else {
            $request -> request -> add(['rent_sale' => 1]);
        }

        $request_data = $request -> except(['gallery']);

        if($request->image){
            if ($property->image != 'default.png') {

                Storage::disk('public_uploads')->delete('/properties/' . $property ->image);

            } // end of image inner if

            Image::make($request->image)->resize(100, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/properties/'. $request ->image->hashName()));

            $request_data['image'] = $request->image->hashName();
        } // end of image outer if.

//        return gettype(json_decode( $property -> gallery, true));

        if($request -> gallery){

            if ($property -> gallery != null) {
                foreach (json_decode($property->gallery, true) as $index => $item) {
                    Storage::disk('public_uploads')->delete('/properties/gallery/' . $item);
                }
                $property->update(['gallery' => null]);
            } // end of inner if

            $gallery_arr = [];
            foreach ( $request -> gallery as $index => $item){
                $gallery_arr += [ $index => $item ->hashName(),];
                Image::make($item)->resize(500, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('/uploads/properties/gallery/'. $item -> hashName()));
            }
//          $request_data['gallery'] = json_encode($gallery_arr);
            $property->update(['gallery' => json_encode($gallery_arr) ]);

        } else {
            if ($property -> gallery != null) {
                foreach (json_decode($property->gallery, true) as $index => $item) {
                    Storage::disk('public_uploads')->delete('/properties/gallery/' . $item);
                }
                $property->update(['gallery' => null]);
            } // end of inner if
        } // end of gallery  outer if

        $property->update($request_data);

        session()->flash('success', 'Property Updated Successfully');
        return redirect()->route('admin.properties.index');
    } // end of update

    public function destroy(Property $property)
    {
        if($property -> image != 'default.png'){
            Storage::disk('public_uploads')->delete('/properties/' . $property ->image);
        }

        if ($property -> gallery != null) {
            foreach (json_decode($property->gallery, true) as $index => $item) {
                Storage::disk('public_uploads')->delete('/properties/gallery/' . $item);
            }
            $property->update(['gallery' => null]);
        } // end of inner if

        $property -> delete();

        session()->flash('success', 'Property Deleted Successfully');
        return redirect()->route('admin.properties.index');

    } // end of destroy

    public function getFeatures(Property $property)
    {
        $all_features = Feature::all();
        $property = $property -> with('features');
        $property_features = $property -> features -> first();

        return $property_features;

        return view('admin.properties.features.index',compact('property' , 'all_features' , 'property_features'));
    }

    public function postFeatures(Request $request)
    {
        return $request -> all();

        $property = Property::find($request -> property_id);

        $property -> features() -> syncWithoutDetaching( $request -> featureIds);

        session()->flash('success', 'Features Added Successfully');
        return redirect()->route('admin.properties.index');
    }

} // end of controller
