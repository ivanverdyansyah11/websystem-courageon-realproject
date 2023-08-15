<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('role_employees_id')->nullable();
            $table->string('fullname');
            $table->string('image');
            $table->string('nip')->nullable();
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->string('position');
            $table->enum('gender', ['L', 'P']);
            $table->enum('status', ['pns', 'pppk', 'honorer'])->nullable();
            $table->string('course_id')->nullable();
            $table->string('highest_rank')->nullable();
            $table->string('room_type')->nullable();
            $table->date('tmt')->nullable();
            $table->string('last_number_skp')->nullable();
            $table->date('last_date_skp')->nullable();
            $table->date('work_tenure')->nullable();
            $table->string('first_number_skp')->nullable();
            $table->date('first_date_skp')->nullable();
            $table->date('salary_increase')->nullable();
            $table->string('employee_card_number')->nullable();
            $table->timestamps();

            $table->index(['role_employees_id', 'course_id', 'created_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
