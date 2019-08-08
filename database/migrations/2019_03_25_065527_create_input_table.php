<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInputTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inputbarang', function (Blueprint $table) {
            $table->varchar('id');
            $table->varchar('barang');
            $table->integer('stok');
            $table->varchar('satuan');
            $table->timestamps('created_at');
            $table->varchar('keterangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inputbarang');
    }
}
