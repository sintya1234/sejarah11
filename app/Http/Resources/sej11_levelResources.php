<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class sej11_levelResources extends JsonResource
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
            'sej11_link_youtube_id'=>$this->sej11_link_youtube_id,
            'gambar_utuh'=>$this->gambar_utuh,
            'judul_sub_bab'=>$this->judul_sub_bab,
            'materi'=>$this->materi,
            ];  
    }
}
