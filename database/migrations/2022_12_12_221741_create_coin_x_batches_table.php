<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coin_x_batches', function (Blueprint $table) {
            $table->id();
            $table->integer('coin_id')->unsigned();
            $table->integer('batch_id')->unsigned();
            $table->double('current_price',10,2);
            $table->bigInteger('market_cap');
            $table->integer('market_cap_rank');
            $table->double('high_24h',10,2);
            $table->double('low_24h',10,2);
            $table->double('price_change_24h',10,2);
            $table->double('price_change_percentage_24h',10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coin_x_batches');
    }
};
