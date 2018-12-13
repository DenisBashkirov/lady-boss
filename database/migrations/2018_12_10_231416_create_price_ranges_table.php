<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriceRangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('price_ranges'))
        {
            Schema::create('price_ranges', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('price_list_item_id')->unsigned();
                $table->integer('min')->unsigned()->nullable();
                $table->integer('max')->unsigned()->nullable();

                $table->foreign('price_list_item_id')->references('id')->on('program_price_list_items')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('price_ranges');
    }
}
