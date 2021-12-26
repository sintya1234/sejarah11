<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class sej11_waktuResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'id'=> $this->id,
            'waktu'=>$this->waktu,
            ];
    }
}
