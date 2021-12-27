<?php

namespace App\Models;

use Database\Factories\Sej11PotonganGambarFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sej11_potongan_gambar extends Model
{
    use HasFactory;

    protected $fillable = [
        'potongan_gambar',
    ];

    public function sej11_pengerjaan()
    {
        return $this->belongsTo(sej11_pengerjaan::class);
    }

    protected static function newFactory(){
        return Sej11PotonganGambarFactory::new();
    }
}
