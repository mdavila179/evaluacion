<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->increments('id')
                ->comment('Valor autonumérico, llave primaria de la tabla departamentospersonas.');
            $table->string('nombre')
                ->comment('Nombre del departamento');

            //Traza
            $table->string('USER_creadopor')->nullable()
                ->comment('Usuario que creó el registro en la tabla');
            $table->timestamp('USER_fechacreado')->nullable()
                ->comment('Fecha en que se creó el registro en la tabla.');
            $table->string('USER_modificadopor')->nullable()
                ->comment('Usuario que realizó la última modificación del registro en la tabla.');
            $table->timestamp('USER_fechamodificado')->nullable()
                ->comment('Fecha de la última modificación del registro en la tabla.');
            $table->string('USER_eliminadopor')->nullable()
                ->comment('Usuario que eliminó el registro en la tabla.');
            $table->timestamp('USER_fechaeliminado')->nullable()
                ->comment('Fecha en que se eliminó el registro en la tabla.');
                
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
        Schema::dropIfExists('departamentos');
    }
}
