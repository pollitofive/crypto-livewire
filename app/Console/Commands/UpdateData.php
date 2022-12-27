<?php

namespace App\Console\Commands;

use App\Models\Batch;
use App\Models\Coin;
use App\Models\CoinXBatch;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class UpdateData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Request to the api and save the data in database';

    private function getCoin(Array $array)
    {
        $coin = Coin::firstOrNew([
            'key' => $array['id'],
            'name' => $array['name'],
            'symbol' => $array['symbol'],
        ]);

        if(! $coin->id) {
            $coin->image = $array['image'];
            $coin->save();
        }

        return $coin;
    }

    private function createCoinCXBatch(Batch $batch, Coin $coin, array $array)
    {
        CoinXBatch::create([
            'batch_id' => $batch->id,
            'coin_id' => $coin->id,
            'current_price' => $array['current_price'],
            'market_cap' => $array['market_cap'],
            'market_cap_rank' => $array['market_cap_rank'],
            'high_24h' => $array['high_24h'],
            'low_24h' => $array['low_24h'],
            'price_change_24h' => $array['price_change_24h'],
            'price_change_percentage_24h' => $array['price_change_percentage_24h']
        ]);
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $data = collect(Http::get('https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&ids='.env('API_LIST_IDS'))->json());
        $batch = Batch::create();
        foreach($data as $array) {
            $coin = $this->getCoin($array);
            $this->createCoinCXBatch($batch, $coin, $array);
        }

        return Command::SUCCESS;
    }
}
