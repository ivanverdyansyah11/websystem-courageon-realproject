<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestasis', function (Blueprint $table) {
            $table->id();
            $table->string('dokumentasi');
            $table->enum('status', ['Guru', 'Pegawai', 'Siswa']);
            $table->date('tanggal');
            $table->string('nama_kegiatan');
            $table->string('penyelenggara');
            $table->string('nama_peserta');
            $table->string('hasil');
            $table->enum('tingkat', ['Kecamatan', 'Kabupaten', 'Provinsi', 'Negara']);
            $table->string('pembina');
            $table->text('deskripsi');
            $table->bigInteger('kategori_prestasis_id');
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
        Schema::dropIfExists('prestasis');
    }
}
