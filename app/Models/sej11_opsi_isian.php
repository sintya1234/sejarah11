<?php

namespace App\Models;

use Database\Factories\Sej11OpsiIsianFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sej11_opsi_isian extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function sej11_soals()
    {
        return $this->belongsTo(sej11_soal::class);
    }

    // protected static function newFactory(){
    //     return Sej11OpsiIsianFactory::new();
    // }

}
