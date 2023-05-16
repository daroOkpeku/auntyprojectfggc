<?php

namespace App\Http\Resources;

use App\Models\travel;
use Illuminate\Http\Resources\Json\JsonResource;

class travelres extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'firstname'=>$this->name,
            'lastname'=>$this->lastname,
            "date_arrival"=>travel::where('user_id', $this->id)->first()->date_arrival,
            "pickup"=>travel::where('user_id', $this->id)->first()->pickup,
            "port_part"=>travel::where('user_id', $this->id)->first()->port_part,
            "time_arrival"=>travel::where('user_id', $this->id)->first()->time_arrival,
        ];
    }
}
