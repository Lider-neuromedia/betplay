<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('Nombre completo');
            $table->string('document')->unique()->comment('Cédula');
            $table->string('email')->unique()->comment('Correo');
            $table->string('phone')->comment('Celular');
            $table->string('address')->comment('Dirección');
            $table->boolean('of_legal_age')->comment('Soy mayor de edad');
            $table->boolean('accept_terms_and_conditions')->comment('Acepto terminos y condiciones');
            $table->boolean('has_betplay_account')->comment('Tengo cuenta en Betplay');
            $table->unsignedBigInteger('code_id')->nullable();
            $table->foreign('code_id')->references('id')->on('codes')->onDelete('set null');
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
        Schema::dropIfExists('clients');
    }
}
