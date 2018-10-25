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
        $parcel = Parcel::where('number', $number)->firstOrFail();
        //$parcel->statuses = $parcel->statuses();

        return new ParcelResource($parcel);
    }
}
