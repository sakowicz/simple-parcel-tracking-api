<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    protected $fillable = [
        'number', 'sender', 'address'
    ];

    public function statuses()
    {
        return $this->belongsToMany('App\Status','parcel_status');
    }
}
