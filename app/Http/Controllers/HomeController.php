<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parcel;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {
        $parcels = DB::table('parcels')->get();
        return view('home', compact('parcels'));
    }
}
