<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories__testimonials', function (Blueprint $table) {
            $table->integer('category_id')->unsigned();
            $table->integer('testimonial_id')->unsigned();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('testimonial_id')->references('id')->on('testimonials');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories__testimonials');
    }
}
