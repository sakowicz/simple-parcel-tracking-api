<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Parcel extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if (!$this->number) {
            return [
                'number' => $this->number,
                'sender' => $this->sender,
                'address' => $this->address,
                'address' => $this->statuses,
            ];
        } else {
            return [
                'number' => $this->number,
                'sender' => $this->sender,
                'address' => $this->address,
                'statuses' => $this->statuses()->get(),
            ];
        }

    }
}
