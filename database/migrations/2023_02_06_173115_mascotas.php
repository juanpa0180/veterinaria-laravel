<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->unsignedBigInteger('mascotas_id')->unique();
            $table->unsignedBigInteger('idDueño');
            $table->id();
            $table->string('nombre');
            $table->string('tipo');
            $table->timestamps();
            
            $table->foreign('idDueño')->references('identificacion')->on('clientes')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mascotas');
    }
};
