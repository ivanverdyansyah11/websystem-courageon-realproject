<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKenaikanKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kenaikan_kelas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tahun_ajarans_id')->index();
            $table->string('jumlah_siswa_x');
            $table->string('jumlah_siswa_xi');
            $table->string('jumlah_siswa_xii');
            $table->enum('gender', ['L', 'P']);
            $table->string('nilai_tertinggi');
            $table->string('nilai_terendah');
            $table->string('rata_nilai');
            $table->string('total_siswa');
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
        Schema::dropIfExists('kenaikan_kelas');
    }
}
