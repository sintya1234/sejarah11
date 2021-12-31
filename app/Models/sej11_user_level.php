<?php

namespace App\Models;

use Database\Factories\Sej11UserLevelFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sej11_user_level extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'sej11_level_id',
        'score',
        'waktu_pengerjaan',
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

    protected static function newFactory(){
        return Sej11UserLevelFactory::new();
    }

    
}
