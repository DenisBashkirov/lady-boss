<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOurContactAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('our_contact_addresses'))
        {
            Schema::create('our_contact_addresses', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->comment('Название (для идентификации')->unique();
                $table->string('country')->nullable();
                $table->string('region')->nullable();
                $table->string('city');
                $table->string('street')->comment('Улица (напрмиер, "ул. Восточная")');
                $table->string('building', 32)->comment('Номер здания (например, "д. 30/2"');
                $table->string('room')->nullable()->comment('Номер офиса или помещения (например, "оф. 401"');
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
        Schema::dropIfExists('our_contact_addresses');
    }
}
