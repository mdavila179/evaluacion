<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('dni')->unique();
            $table->string('nombre');
            $table->string('email')->unique()
                ->comment('Correo electrónico del usuario. Necesario para enviar enlace de restauración de contraseña.');            

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
            $table->integer('idcargo')->unsigned();
            $table->foreign('idcargo')
                  ->references('id')
                  ->on('cargos')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->integer('idusuario')->unsigned();
            $table->foreign('idusuario')
                  ->references('id')
                  ->on('users')
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
        Schema::dropIfExists('personas');
    }
}
