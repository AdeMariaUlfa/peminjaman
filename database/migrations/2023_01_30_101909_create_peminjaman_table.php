<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nim');
            $table->string('jurusan');
            $table->unsignedBigInteger('idFasilitas');
            $table->unsignedBigInteger('idUser');
            $table->string('noWa');
            $table->text('alamat');
            $table->text('tujuan');
            $table->string('status');
            $table->string('suratPermohonan');
            $table->date('tanggalPinjam');
            $table->date('tanggalSelesai');
            $table->timestamps();

           
            $table->foreign('idUser')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('idFasilitas')->references('id')->on('fasilitas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
}
