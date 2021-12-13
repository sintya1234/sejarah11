<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sej11_gambar_materi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //bissaaa plisss

    public function sej11_levels()
    {
        return $this->belongsToMany(sej11_level::class);
    }
}
