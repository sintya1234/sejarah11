<?php

namespace App\Models;

use Database\Factories\Sej11LeaderboardFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sej11_Leaderboard extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function newFactory(){
        return Sej11LeaderboardFactory::new();
    }
}
