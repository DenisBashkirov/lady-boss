<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOurContactPhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('our_contact_phones'))
        {
            Schema::create('our_contact_phones', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->unique()->comment('Название (для идентификации');
                $table->integer('country_code')->unsigned()->comment('Код страны (без "+")');
                $table->integer('city_code')->unsigned()->comment('Код города');
                $table->integer('number')->unsigned()->comment('Номер телефона (без кодов и дефисов)');
                $table->integer('ordering')->nullable();
                $table->timestamps();
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
        Schema::dropIfExists('our_contact_phones');
    }
}
