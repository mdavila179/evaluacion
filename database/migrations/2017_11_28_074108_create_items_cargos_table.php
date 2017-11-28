<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Tabla para asignar items a evaluados por cargos
        Schema::create('items_cargos', function (Blueprint $table) {
            $table->increments('id')
                ->comment('Valor autonumérico, llave primaria de la tabla items_cargos.');
            
             //Relaciones
            $table->integer('iditem')->unsigned();
            $table->foreign('iditem')
                  ->references('id')
                  ->on('items')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->integer('idcargo')->unsigned();
            $table->foreign('idcargo')
                  ->references('id')
                  ->on('cargos')
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
        Schema::dropIfExists('items_cargos');
    }
}
