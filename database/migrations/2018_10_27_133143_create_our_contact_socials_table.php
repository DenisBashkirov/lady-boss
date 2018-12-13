<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOurContactSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('our_contact_socials'))
        {
            Schema::create('our_contact_socials', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 32)->unique();
                $table->string('link');
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
        Schema::dropIfExists('our_contact_socials');
    }
}
