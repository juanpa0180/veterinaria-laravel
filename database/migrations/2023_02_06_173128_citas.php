<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->unsignedBigInteger('idCita')->unique();
            $table->datetime('fechaHora')->unique( );
            $table->string('mascota');
            $table->timestamps();

            $table->foreign('idCita')->references('mascotas_id')->on('mascotas')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
};
