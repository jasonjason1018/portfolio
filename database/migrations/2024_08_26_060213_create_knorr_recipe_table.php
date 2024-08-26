<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKnorrRecipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('knorr_recipe', function (Blueprint $table) {
            $table->id('id_recipe');
            $table->string('name', 50);
            $table->string('food', 255);
            $table->string('seasoning', 255);
            $table->text('practice');
            $table->string('secret', 255);
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
        Schema::dropIfExists('knorr_recipe');
    }
}
