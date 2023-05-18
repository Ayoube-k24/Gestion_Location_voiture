<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('model');
            $table->string('year');
            $table->boolean('availablity');
            $table->timestamps();
            $table->foreignId('categorie_id')
                        ->constrained('categories')
                        ->onUpdate('cascade')
                        ->onDelete('cascade');
            $table->foreignId('fuel_id')
                        ->constrained('fuel_types')
                        ->onUpdate('cascade')
                        ->onDelete('cascade');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
