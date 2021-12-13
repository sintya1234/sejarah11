<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sej11_link_youtube extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function sej11_level()
    {
        return $this->belongsTo(sej11_level::class);
    } 
}
