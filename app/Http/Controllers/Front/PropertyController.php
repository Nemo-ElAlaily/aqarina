<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\City;
use App\Models\Admin\Property;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::with('country','city')->paginate(PAGINATION_COUNT);
        return view('front.properties.index' , compact('properties'));

    } // end of index

    public function show($id)
    {
        $property = Property::find($id);
        return view('front.properties.show', compact('property'));

    } // end of show
}
