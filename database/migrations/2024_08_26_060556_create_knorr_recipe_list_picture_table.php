<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKnorrRecipeListPictureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('knorr_recipe_list_picture', function (Blueprint $table) {
            $table->id('id_recipe_list_picture');
            $table->integer('id_recipe');
            $table->string('path', 100);
            $table->integer('category');
            $table->integer('recipe_type');
            $table->integer('question1');
            $table->integer('question2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('knorr_recipe_list_picture');
    }
}
