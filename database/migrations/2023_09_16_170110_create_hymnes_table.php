<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHymnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hymnes', function (Blueprint $table) {
            $table->id();
            $table->string('banner');
            $table->string('title_section');
            $table->text('hymne');
            $table->string('creation');
            // $table->string('music_sound');
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
        Schema::dropIfExists('hymnes');
    }
}
