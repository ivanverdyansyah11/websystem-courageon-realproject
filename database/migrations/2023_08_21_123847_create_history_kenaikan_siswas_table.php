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
            $table->bigInteger('students_id')->nullable();
            $table->bigInteger('jurusans_id')->nullable();
            $table->bigInteger('kelases_id')->nullable();
            $table->bigInteger('indexes_id')->nullable();
            $table->bigInteger('semesters_id')->nullable();
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
