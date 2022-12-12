<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoinXBatch extends Model
{
    use HasFactory;

    protected $fillable = ['coin_id','batch_id','current_price','market_cap','market_cap_rank','high_24h'
        ,'low_24h','price_change_24h','price_change_percentage_24h'];
}
