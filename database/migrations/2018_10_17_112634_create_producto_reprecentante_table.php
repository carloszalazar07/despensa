<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoReprecentanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_reprecentante', function (Blueprint $table) {
            $table->unsignedInteger('reprecentante_id');
            $table->unsignedInteger('producto_id');

            $table->foreign('reprecentante_id')->references('id')->on('reprecentantes');
            $table->foreign('producto_id')->references('id')->on('productos');
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
        Schema::dropIfExists('producto_reprecentante');
    }
}
