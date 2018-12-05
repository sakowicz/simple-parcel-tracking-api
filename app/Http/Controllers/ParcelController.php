<?php

namespace App\Http\Controllers;

use App\Http\Resources\Parcel as ParcelResource;
use App\Parcel;

class ParcelController extends Controller
{

    public function show($number)
    {
        $parcel = Parcel::where('number', $number)->first();
        if (!$parcel) {
            $parcel = collect();
            $parcel->id = "";
            $parcel->number = "";
            $parcel->address = "";
            $parcel->sender = "";
            $parcel->statuses = array(
                "title" => "Nie ma takiej przesyłki",
                "description" => "",
                "location" => "",
                "created_at" => "",
            );
        }

        return new ParcelResource($parcel);
    }
}
