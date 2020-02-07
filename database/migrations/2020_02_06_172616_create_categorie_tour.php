<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategorieTour extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias_tours', function (Blueprint $table) {
            $table->integer('categorie_id')->unsigned();
            $table->integer('tour_id')->unsigned();

            $table->foreign('categorie_id')->references('id')->on('categories');
            $table->foreign('tour_id')->references('id')->on('tours');
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
        Schema::dropIfExists('categorias_tours');
    }
}
