<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('programs'))
        {
            Schema::create('programs', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('slug');
                $table->integer('subcategory_id')->unsigned();
                $table->text('text')->nullable();
                $table->string('time')->nullable();
                $table->integer('price')->unsigned()->nullable();
                $table->integer('ordering')->unsigned()->nullable();

                $table->foreign('subcategory_id')->references('id')->on('subcategories');
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
        Schema::dropIfExists('programs');
    }
}
