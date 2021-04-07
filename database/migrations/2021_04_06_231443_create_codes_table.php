<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('consecutive')->unique()->comment('Consecutivo');
            $table->string('coupon')->unique()->comment('Cupón');
            $table->double('value', 14, 2)->comment('Valor');
            $table->string('department')->comment('Departamento');
            $table->timestamp('activation_date_start')->comment('Fecha de activación');
            $table->integer('life')->comment('Vigencia');
            $table->timestamp('activation_date_end')->comment('Fecha final de vigencia');
            $table->string('campaign')->comment('Campaña');
            $table->string('observation')->comment('Observaciones');
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
        Schema::dropIfExists('codes');
    }
}
