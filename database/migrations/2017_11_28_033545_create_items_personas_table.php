<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Tabla para asignar items a evaluadores por nombre
        Schema::create('items_personas', function (Blueprint $table) {
            $table->increments('id')
                ->comment('Valor autonumérico, llave primaria de la tabla items_personas.');
            
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
        Schema::dropIfExists('items_personas');
    }
}
