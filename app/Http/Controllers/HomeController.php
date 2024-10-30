<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $location = Location::first();

        if (is_null($location))
        {
            return redirect()->route('locations.create');
        }

        return view('index');
    }
}
