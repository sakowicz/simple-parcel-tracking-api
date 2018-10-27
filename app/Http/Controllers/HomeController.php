<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parcel;

class HomeController extends Controller
{
    public function index() {
        $parcels = Parcel::where('id', '!=', 404)->get();
        return view('home', compact('parcels'));
    }
}
