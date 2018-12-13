<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('subcategories'))
        {
            Schema::create('subcategories', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('slug');
                $table->integer('parent_id')->unsigned();
                $table->text('text')->nullable();
                $table->integer('ordering')->nullable()->unsigned();

                $table->foreign('parent_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('subcategories');
    }
}
