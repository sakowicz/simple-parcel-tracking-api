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
        return $this->HasMany('App\Status');
    }
}
