<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignarServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignar_servicios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('servicio');
            $table->string('detalle_servicio');
            $table->string('total');
            $table->foreignId('clientes_id')->constrained('clientes');
            $table->foreignId('estados_id')->constrained('estados');
            $table->foreignId('tecnicos_id')->constrained('tecnicos');
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
        Schema::dropIfExists('asignar_servicios');
    }
}
