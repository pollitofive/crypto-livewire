<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    use HasFactory;
    protected $fillable = ['key','name','symbol','image'];

    public function coinxbatch()
    {
        return $this->hasOne(CoinXBatch::class)->latest();
    }
}
