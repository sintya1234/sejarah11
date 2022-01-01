<?php

namespace App\Models;

use Database\Factories\Sej11OpsiPilganFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sej11_opsi_pilgan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function sej11_soal()
    {
        return $this->belongsTo(sej11_soal::class);
    }

    // protected static function newFactory(){
    //     return Sej11OpsiPilganFactory::new();
    // }
}
