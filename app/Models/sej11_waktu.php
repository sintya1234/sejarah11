<?php

namespace App\Models;

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
}
