<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class sej11_soalResources extends JsonResource
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
            'sej11_level_id'=>$this->sej11_level_id,
            'sej11_waktu_id'=>$this->sej11_waktu_id,
            'gambar_materi_id'=>$this->gambar_materi_id,
            'jenis_soal'=>$this->jenis_soal,
            'potongan_gambar'=>$this->potongan_gambar,

            ];
    }
}
