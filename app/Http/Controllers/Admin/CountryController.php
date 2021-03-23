<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Country;
use Illuminate\Http\Request;

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
        //
    }

    public function show(Country $country)
    {
        //
    }

    public function edit(Country $country)
    {
        //
    }

    public function update(Request $request, Country $country)
    {
        //
    }

    public function destroy(Country $country)
    {
        //
    }
} // end of controller
