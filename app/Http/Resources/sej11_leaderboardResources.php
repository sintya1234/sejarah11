<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class sej11_leaderboardResources extends JsonResource
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
            'user_id'=> $this->user_id,
            'peringkat'=>$this->peringkat,
            'total_skor'=>$this->total_skor,
            'total_waktu_pengerjaan'=>$this->total_waktu_pengerjaan
            ];
    }
}
