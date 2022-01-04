<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class sej11_user_levelResources extends JsonResource
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
            'sej11_user_level_id'=>$this->sej11_user_level_id,
            'user_id'=>$this->user_id,
            'sej11__level_id'=>$this->sej11__level_id,
            'score'=>$this->score
            ];
    }
}
