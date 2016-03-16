<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('nombre');
            $table->text('descripcion')->default('Descripción');
            $table->json('aperturas')->nullable();
            $table->json('caracteristicas')->nullable();
            $table->json('icono')->nullable();
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
        Schema::drop('productos');
    }
}
