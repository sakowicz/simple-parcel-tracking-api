<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = [
        'title',  'description', 'location'
    ];

    public function parcels()
    {
        return $this->belongsToMany('App\Parcel', 'parcel_status');
    }
}
