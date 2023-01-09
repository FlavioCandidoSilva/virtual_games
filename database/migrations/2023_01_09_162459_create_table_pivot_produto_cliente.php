<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePivotProdutoCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtoCliente', function (Blueprint $table) {
            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->unsignedBigInteger('produto_id')->nullable();
            $table->primary(['cliente_id', 'produto_id']);
            $table->timestamps();

            $table->foreign('produto_id')
                ->references('id')
                ->on('produtos');

            $table->foreign('cliente_id')
                ->references('id')
                ->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtoCliente');
    }
}
