<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentaBancariaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuenta_bancaria', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('banco_id');
            $table->unsignedBigInteger('tipocta_id');
            $table->unsignedBigInteger('user_id');
            $table->string('identificacionTitular');
            $table->string('nombreTitular');
            $table->string('numero');
            $table->timestamps();

            $table->foreign('banco_id')->references('id')->on('bancos');
            $table->foreign('tipocta_id')->references('id')->on('tipo_cuentas');
            $table->foreign('user_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuenta_bancaria');
    }
}
