<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Agency;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function index()
    {
        $agencies = Agency::all();
        return view('front.agencies.index' , compact('agencies'));

    } // end of index

} // end of controller
