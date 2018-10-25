<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parcel;

class HomeController extends Controller
{
    public function index() {
        $parcels = Parcel::firstOrfail();
        $statuses = $parcels->statuses()->get();
        return view('home', compact('parcels', 'statuses'));
    }
}
