<?php

namespace App\Http\Livewire;

use App\Models\Coin;
use Livewire\Component;

class Show extends Component
{
    public $coin;

    protected $listeners = ['showCoin' => 'showCoin'];

    public function mount()
    {
        $this->showCoin(1);
    }

    public function render()
    {
        return view('livewire.show');
    }

    public function showCoin($id = 1)
    {
        $this->coin = Coin::where("id",$id)->first();
        return $this->render();
    }
}
