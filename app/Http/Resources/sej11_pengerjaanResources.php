<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class sej11_pengerjaanResources extends JsonResource
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
            'user_id'=>$this->user_id,
            'level_id'=>$this->level_id,
            'soal_id'=>$this->soal_id,
            'potongan_gambar_id'=>$this->potongan_gambar_id,
            'status_pengerjaan'=>$this->status_pengerjaan,
            ];
    }
}
