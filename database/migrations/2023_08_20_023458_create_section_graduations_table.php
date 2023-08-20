<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionGraduationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_graduations', function (Blueprint $table) {
            $table->id();
            $table->string('title_section');
            $table->string('button_1');
            $table->string('button_2');
            $table->string('button_3');
            $table->string('caption_1');
            $table->string('caption_2');
            $table->string('caption_3');
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
        Schema::dropIfExists('section_graduations');
    }
}
