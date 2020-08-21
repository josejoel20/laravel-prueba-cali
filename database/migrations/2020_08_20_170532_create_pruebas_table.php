<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePruebasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pruebas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom_ape',100);
            $table->string('tipo_documento',15);
            //Seria caracter 20 por el dato de 'Carne de extranjeria'
            $table->string('n_documento',20);
            $table->string('correo_electronico',50);
            $table->date('fecha_nacimiento');
            $table->string('direccion',150);
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
        Schema::dropIfExists('pruebas');
    }
}
