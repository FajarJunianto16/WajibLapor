<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTanggapansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanggapans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pengaduan_id')->references('id')->on('pengaduans');
            $table->date('tanggal_tanggapan');
            $table->string('tanggapan');
            $table->unsignedBigInteger('petugas_id')->references('id')->on('petugas');

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
        Schema::dropIfExists('tanggapans');
    }
}
