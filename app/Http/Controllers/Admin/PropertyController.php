<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Agency;
use App\Models\Admin\City;
use App\Models\Admin\Country;
use App\Models\Admin\Currency;
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
