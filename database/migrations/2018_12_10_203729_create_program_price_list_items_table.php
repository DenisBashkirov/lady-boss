<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramPriceListItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('program_price_list_items'))
        {
            Schema::create('program_price_list_items', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('program_id')->unsigned();
                $table->string('text');
                $table->integer('price')->nullable();
                $table->integer('ordering')->unsigned()->nullable();

                $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');
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
        Schema::dropIfExists('program_price_list_items');
    }
}
