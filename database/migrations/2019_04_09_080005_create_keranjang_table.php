<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeranjangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keranjang', function (Blueprint $table) {
            $table->varchar('id');
            $table->varchar('nama');
            $table->varchar('departemen');
            $table->varchar('barang');
            $table->int('jumlah');
            $table->int('jmlpenuhi');
            $table->varchar('satuan');
            $table->varchar('kategori');
            $table->date('tanggal');
            $table->varchar('status');
            $table->date('terima');
            $table->date('approve');
            $table->int('gantungan');
            $table->date('updated_at');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keranjang');
    }
}
