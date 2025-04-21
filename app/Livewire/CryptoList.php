<?php

namespace App\Livewire;

use App\Models\CoinXBatch;
use Livewire\Component;

class CryptoList extends Component
{
    public $data;

    public function mount()
    {
        $this->data = $this->getCoins();
    }

    public function getCoins()
    {
        $this->data = CoinXBatch::getLastBatch();

        return $this->data;
    }

    public function render()
    {
        return view('livewire.crypto-list');
    }
}
