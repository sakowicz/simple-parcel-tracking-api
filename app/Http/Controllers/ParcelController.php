<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Recuests;
use App\Parcel;
use App\Http\Resources\Parcel as ParcelResource;


class ParcelController extends Controller
{
    
    public function show($number)
    {
        $parcel = Parcel::where('number', $number)->first();
        if (!$parcel) $parcel = Parcel::where('id', 404)->firstOrFail();

        return new ParcelResource($parcel);
    }
}
