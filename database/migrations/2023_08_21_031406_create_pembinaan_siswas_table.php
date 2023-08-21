<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembinaanSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembinaan_siswas', function (Blueprint $table) {
            $table->id();
            $table->string('dokumentasi');
            $table->date('tanggal');
            $table->text('masalah');
            $table->text('solusi');
            $table->bigInteger('students_id');
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
        Schema::dropIfExists('pembinaan_siswas');
    }
}
