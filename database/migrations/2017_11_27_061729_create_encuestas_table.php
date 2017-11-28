<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestas', function (Blueprint $table) {
            $table->increments('id')
                ->comment('Valor autonumérico, llave primaria de la tabla ENCUESTAS.');
            $table->string('titulo')
                ->comment('Título de la encuesta.');
            $table->string('descripcion')->nullable()
                ->comment('Descripción de la encuesta.');
            $table->dateTime('fechapublicacion')->nullable()
                ->comment('Fecha de publicación de la encuesta.');
            $table->dateTime('fechavigencia')
                ->comment('Fecha de vigencia de la encuesta. Al cumplise el tiempo estipulado, la encuesta debe cerrarse automáticamente.');
            $table->string('estado')->nullable()
                ->comment('Descripción del estado de la encuesta. Por defecto: Abierta, Publicada, Cerrada, Finalizada y Eliminada.');
            

            //Traza
            $table->string('ENCU_creadopor')->nullable()
                ->comment('Usuario que creó el registro en la tabla.');
            $table->timestamp('ENCU_fechacreado')->nullable()
                ->comment('Fecha en que se creó el registro en la tabla.');
            $table->string('ENCU_modificadopor')->nullable()
                ->comment('Usuario que realizó la última modificación del registro en la tabla.');
            $table->timestamp('ENCU_fechamodificado')->nullable()
                ->comment('Fecha de la última modificación del registro en la tabla.');
            $table->string('ENCU_eliminadopor')->nullable()
                ->comment('Usuario que eliminó el registro en la tabla.');
            $table->timestamp('ENCU_fechaeliminado')->nullable()
                ->comment('Fecha en que se eliminó el registro en la tabla');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('encuestas');
    }
}
