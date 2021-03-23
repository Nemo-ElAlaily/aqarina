<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image as Image;

class CountryController extends Controller
{
    public function __construct()
    {
        $this -> middleware(['permission:read_countries'])->only('index');
        $this -> middleware(['permission:create_countries'])->only(['create', 'store']);
        $this -> middleware(['permission:update_countries'])->only(['edit', 'update']);
        $this -> middleware(['permission:delete_countries'])->only(['destroy']);
    } // end of construct

    public function index(Request $request)
    {
        $countries  = Country::when($request -> search , function ($query) use ($request) {
            return $query -> where('name', 'like', '%' . $request -> search . '%');
        })->latest()->paginate(PAGINATION_COUNT);

        return view('admin.address.countries.index', compact('countries'));

    } // end of index

    public function create()
    {
        return view('admin.address.countries.create');

    }// end of create

    public function store(Request $request)
    {
        $rules = [
            'image' => 'required|image',
        ] ;

        foreach (config('translatable.locales') as $locale) {
            $rules += [
                $locale . '.name' => ['required', Rule::unique('country_translations', 'name')],
            ];
        } // end of for each

        $request -> validate($rules,
            [
                'required' => 'This Field is Required',
            ]);// end of validation

        $request_data = $request -> all();

        if ($request -> image) {
            Image::make($request->image)->resize(100, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('/uploads/countries/'. $request ->image->hashName()));

            $request_data['image'] = $request->image->hashName();
        }

        Country::create($request_data);

        session()->flash('success', 'Country Added Successfully');
        return redirect()->route('admin.countries.index');

    }// end of store

    public function edit(Country $country)
    {
        return view('admin.address.countries.edit', compact('country'));

    } // end of edit

    public function update(Request $request, Country $country)
    {
        $rules = [
            'image' => 'image',
        ];

        foreach (config('translatable.locales') as $locale) {
            $rules += [
                $locale . '.name' => ['required', Rule::unique('country_translations', 'name')->ignore($country->id, 'country_id')],
            ];
        } // end of for each

        $request -> validate($rules,
            [
                'required' => 'This Field is Required',
            ]);// end of validation

        $request_data = $request -> all();

        if($request->image){

            if ($country -> image != 'default.png') {

                Storage::disk('public_uploads')->delete('/countries/' . $country ->image);

            } // end of inner if

            Image::make($request->image)->resize(100, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('/uploads/countries/'. $request ->image->hashName()));

            $request_data['image'] = $request->image->hashName();
        } // end of outer if

        $country->update($request_data);

        session()->flash('success', 'Country Updated Successfully');
        return redirect()->route('admin.countries.index');

    } // end of update

    public function destroy(Country $country)
    {
        if($country -> image != 'default.png'){
            Storage::disk('public_uploads')->delete('/countries/' . $country ->image);
        }
        $country -> delete();

        session()->flash('success', 'Country Deleted Successfully');
        return redirect()->route('admin.countries.index');
    } // end of destroy
} // end of controller
