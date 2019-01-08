<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('users') && !Schema::hasColumn('users', 'role_id'))
        {
            Schema::table('users', function (Blueprint $table) {
                $table->integer('role_id')->unsigned();

                $table->foreign('role_id')->references('id')->on('user_roles')->onDelete('cascade');
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
        //
    }
}
