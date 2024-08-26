<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKnorrProductDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('knorr_product_description', function (Blueprint $table) {
            $table->id();
            $table->string('picture_path', 255);
            $table->string('momo_uri', 255);
            $table->string('pchome_uri', 255);
            $table->string('yahoo_uri', 255);
            $table->string('name', 50);
            $table->string('sku', 50);
            $table->text('description');
            $table->string('icon_path', '255');
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
        Schema::dropIfExists('knorr_product_description');
    }
}
