<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sej11_user_level extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_students',
        'id_level',
        'score',
        'Waktu_pengerjaan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sej11_level()
    {
        return $this->belongsTo(sej11_level::class);
    }

    public function sej11_pengerjaans()
    {
        return $this->hasMany(sej11_level::class);
    }

    
}
