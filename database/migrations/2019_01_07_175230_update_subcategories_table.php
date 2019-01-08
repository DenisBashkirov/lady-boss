<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('subcategories') && !Schema::hasColumns('subcategories', ['title', 'meta_description', 'meta_keywords']))
        {
            Schema::table('subcategories', function (Blueprint $table) {
                $table->text('title')->nullable();
                $table->text('meta_description')->nullable();
                $table->text('meta_keywords')->nullable();
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
