<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\City;
use App\Models\Admin\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image as Image;

class CityController extends Controller
{
    public function __construct()
    {
        $this -> middleware(['permission:read_cities'])->only('index');
        $this -> middleware(['permission:create_cities'])->only(['create', 'store']);
        $this -> middleware(['permission:update_cities'])->only(['edit', 'update']);
        $this -> middleware(['permission:delete_cities'])->only(['destroy']);
    } // end of construct

    public function index(Request $request)
    {
        $cities  = City::when($request -> search , function ($query) use ($request) {
            return $query -> where('name', 'like', '%' . $request -> search . '%');
        })->latest()->paginate(PAGINATION_COUNT);

        return view('admin.address.cities.index', compact('cities'));

    } // end of index

    public function create()
    {
        return view('admin.address.cities.create');

    }// end of create

    public function store(Request $request)
    {
        $rules = [];

        foreach (config('translatable.locales') as $locale) {
            $rules += [
                $locale . '.name' => ['required', Rule::unique('city_translations', 'name')],
            ];
        } // end of for each

        $request -> validate($rules,
            [
                'required' => 'This Field is Required',
            ]);// end of validation

        $request_data = $request -> all();

        City::create($request_data);

        session()->flash('success', 'City Added Successfully');
        return redirect()->route('admin.cities.index');

    }// end of store

    public function edit(City $city)
    {
        return view('admin.address.cities.edit', compact('city'));

    } // end of edit

    public function update(Request $request, City $city)
    {
        $rules = [];

        foreach (config('translatable.locales') as $locale) {
            $rules += [
                $locale . '.name' => ['required', Rule::unique('city_translations', 'name')->ignore($city->id, 'city_id')],
            ];
        } // end of for each

        $request -> validate($rules,
            [
                'required' => 'This Field is Required',
            ]);// end of validation

        $request_data = $request -> all();

        $city->update($request_data);

        session()->flash('success', 'City Updated Successfully');
        return redirect()->route('admin.cities.index');

    } // end of update

    public function destroy(City $city)
    {
        $city -> delete();

        session()->flash('success', 'City Deleted Successfully');
        return redirect()->route('admin.cities.index');

    } // end of destroy

} // end of controller
