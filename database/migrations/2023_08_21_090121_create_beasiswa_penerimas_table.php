<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeasiswaPenerimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beasiswa_penerimas', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->text('digunakan_untuk');
            $table->bigInteger('students_id');
            $table->bigInteger('beasiswas_id');
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
        Schema::dropIfExists('beasiswa_penerimas');
    }
}
