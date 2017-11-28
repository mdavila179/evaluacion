<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->increments('id')
                ->comment('Valor autonumérico, llave primaria de la tabla respuestas.');
            $table->unsignedBigInteger('valor')
                ->comment('Valor de la respuesta');
            $table->timestamp('fechacreado')->nullable()
                ->comment('Fecha en que se creó el registro en la tabla.');

            //Relaciones
            $table->integer('iditem')->unsigned();
            $table->foreign('iditem')
                  ->references('id')
                  ->on('items')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->integer('idpersona')->unsigned();
            $table->foreign('idpersona')
                  ->references('id')
                  ->on('personas')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuestas');
    }
}
