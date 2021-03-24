<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Agency;
use App\Models\Admin\City;
use App\Models\Admin\Country;
use App\Models\Admin\Property;
use App\Models\Admin\PropertyStatus;
use App\Models\Admin\PropertyType;
use Illuminate\Http\Request;

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
        $properties = Property::when($request -> search , function ($query) use ($request) {
            return $query -> where('name', 'like', '%' . $request -> search . '%');
        })->latest()->paginate(PAGINATION_COUNT);

        return view('admin.properties.index', compact('properties'));

    } // end of index

    public function create()
    {
        $countries = Country::all();
        $cities = City::all();
        $property_types = PropertyType::all();
        $property_statuses = PropertyStatus::all();
        $agencies = Agency::all();
        $currencies = Agency::all();
        return view('admin.properties.create', compact('countries', 'cities', 'property_types', 'property_statuses',
        'agencies' , 'currencies'));

    } // end of create

    public function store(Request $request)
    {
        return $request -> all();
    } // end of store

    public function edit(Property $property)
    {
        //
    } // end of edit

    public function update(Request $request, Property $property)
    {
        //
    } // end of update

    public function destroy(Property $property)
    {
        //
    } // end of destroy

} // end of controller
