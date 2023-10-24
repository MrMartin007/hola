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
            $table->string('total'); // Columna que puede ser nula
            $table->foreignId('clientes_id')->nullable()->constrained('clientes'); // Clave foránea que puede ser nula
            $table->foreignId('estados_id')->nullable()->constrained('estados'); // Clave foránea que puede ser nula
            $table->foreignId('tecnicos_id')->nullable()->constrained('tecnicos'); // Clave foránea que puede ser nula
            $table->foreignId('detalles_servicios_id')->nullable()->constrained('detalles_servicios'); // Clave foránea que puede ser nula
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
