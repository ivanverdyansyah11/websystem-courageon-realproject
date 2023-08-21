<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavigasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navigasis', function (Blueprint $table) {
            $table->id();
            $table->string('link_1');
            $table->string('link_2');
            $table->string('link_3');
            $table->string('link_4');
            $table->string('link_5');
            $table->string('link_6');
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
        Schema::dropIfExists('navigasis');
    }
}
