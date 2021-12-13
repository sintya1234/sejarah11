<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sej11_soal extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    

    public function sej11_level()
    {
        return $this->belongsTo(sej11_level::class);
    }

    public function sej11_waktu()
    {
        return $this->belongsTo(sej11_waktu::class);
    }

    public function sej11_opsi_pilgans()
    {
        return $this->hasMany(sej11_opsi_pilgan::class);
    }

    public function sej11_opsi_isian()
    {
        return $this->belongsTo(sej11_opsi_pilgan::class);
    }

}
