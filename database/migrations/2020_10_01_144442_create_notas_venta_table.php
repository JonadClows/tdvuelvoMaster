<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas_venta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('monto_nota');
            $table->unsignedBigInteger('user_id');
            $table->string('apellidoTitular');
            $table->string('nombreTitular');
            $table->string('numero');
            $table->timestamps();

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
        Schema::dropIfExists('notas_venta');
    }
}
