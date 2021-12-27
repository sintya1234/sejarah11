<?php

namespace App\Models;

use Database\Factories\Sej11WaktuFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sej11_waktu extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function sej11_soals()
    {
        return $this->hasMany(sej11_soal::class);
    }

    protected static function newFactory(){
        return Sej11WaktuFactory::new();
    }
}
