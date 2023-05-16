<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\accommdation;
class hostelresource extends JsonResource
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
            'hostel'=>accommdation::where('user_id', $this->id)->first()->hostel,
            'picture'=>accommdation::where('user_id', $this->id)->first()->picture,
        ];
    }
}
