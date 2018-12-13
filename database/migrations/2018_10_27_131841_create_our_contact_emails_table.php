<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOurContactEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('our_contact_emails'))
        {
            Schema::create('our_contact_emails', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->unique()->comment('Название (для идентификации');
                $table->string('value');
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
        Schema::dropIfExists('our_contact_emails');
    }
}
