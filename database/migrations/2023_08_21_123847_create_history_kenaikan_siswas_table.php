<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryKenaikanSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_kenaikan_siswas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('students_id');
            $table->bigInteger('jurusans_id');
            $table->bigInteger('kelases_id');
            $table->bigInteger('indexes_id');
            $table->bigInteger('semesters_id');
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
        Schema::dropIfExists('history_kenaikan_siswas');
    }
}
