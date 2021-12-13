<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sej11_opsi_pilgan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function sej11_soal()
    {
        return $this->belongsTo(sej11_soal::class);
    }
}
