<?php

namespace App\Models;

use Database\Factories\Sej11PengerjaanFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class sej11_pengerjaan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function sej11_user_level()
    {
        return $this->belongsTo(sej11_user_level::class,'sej11_user_level_id','id');
    }

    public function sej11_potongan_gambar()
    {
        return $this->belongsTo(sej11_potongan_gambar::class);
    }

    public function sej11_soal()
    {
        return $this->belongsTo(Sej11_soal::class,'sej11_soal_id','id');
    }

    protected static function newFactory(){
        return Sej11PengerjaanFactory::new();
    }
    // public function authorize()
    // {
    //     return Auth::check(); 
    // }
}
