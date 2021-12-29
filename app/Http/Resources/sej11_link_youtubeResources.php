<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class sej11_link_youtubeResources extends JsonResource
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
            'sej11__level_id'=> $this->sej11__level_id,
            'link_youtube'=>$this->link_youtube,
            ];
    }
}
