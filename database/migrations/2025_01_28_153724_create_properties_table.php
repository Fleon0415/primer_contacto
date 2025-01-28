<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->decimal('price', 15, 2);
            $table->string('location');
            $table->string('type'); // casa, apartamento, terreno, etc.
            $table->integer('bedrooms')->default(0); // cantidad de habitaciones
            $table->integer('bathrooms')->default(0); // cantidad de baños
            $table->integer('parking')->default(0); // cantidad de parqueaderos
            $table->integer('size')->nullable(); // tamaño en metros cuadrados
            $table->string('status')->default('disponible'); // disponible, vendida, rentada
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('properties');
    }
};
