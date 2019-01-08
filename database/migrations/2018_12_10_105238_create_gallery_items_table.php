<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('gallery_items'))
        {
            Schema::create('gallery_items', function (Blueprint $table) {
                $table->increments('id');
                $table->string('filename')->unique()->comment('e.g. "file" - without .ext');
                $table->string('description')->nullable();
                $table->integer('category_id')->unsigned()->nullable();
                $table->integer('subcategory_id')->unsigned()->nullable();
                $table->timestamp('added_on')->useCurrent();

                $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
                $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');
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
        Schema::dropIfExists('gallery_items');
    }
}
