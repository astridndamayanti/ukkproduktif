<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTanggapanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanggapan', function (Blueprint $table) {
            $table->varchar('nama');
            $table->varchar('departemen');
            $table->varchar('id');
            $table->varchar('tanggapan');
            $table->date('tanggal');
            $table->varchar('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tanggapan');
    }
}
