<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodos', function (Blueprint $table) {
            $table->increments('id')
                ->comment('Valor autonumérico, llave primaria de la tabla pesos');
            $table->string('periodo')
                ->comment('mes y año de evaluacion');
            $table->string('estado')
                ->comment('define el estado del periodo puede ser abierto o cerrado según asignación del administrador');
            
            //Relaciones
            $table->integer('idempresa')->unsigned();
            $table->foreign('idempresa')
                  ->references('id')
                  ->on('empresas')
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
        Schema::dropIfExists('periodos');
    }
}
