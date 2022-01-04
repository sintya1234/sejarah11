<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class sej11_opsi_isianResources extends JsonResource
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
            'sej11_soal_id'=>$this->sej11_soal_id,
            'jawaban_benar'=>$this->jawaban_benar,
            ];
    }
}
