<?php

namespace App\Models;

use Database\Factories\Sej11PengerjaanFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sej11_pengerjaan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function sej11_user_level()
    {
        return $this->belongsTo(sej11_user_level::class);
    }

    public function sej11_potongan_gambar()
    {
        return $this->belongsTo(sej11_potongan_gambar::class);
    }

    protected static function newFactory(){
        return Sej11PengerjaanFactory::new();
    }
}
