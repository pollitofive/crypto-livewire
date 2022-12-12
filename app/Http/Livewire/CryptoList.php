<?php

namespace App\Http\Livewire;

use Codenixsv\CoinGeckoApi\CoinGeckoClient;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class CryptoList extends Component
{
    public function __construct()
    {
        $data = collect(Http::get('https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&ids='.env('API_LIST_IDS'))->json());
        dd($data);
    }

    public function render()
    {
        return view('livewire.crypto-list');
    }
}
