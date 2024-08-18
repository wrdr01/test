<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('monthly_payment');
            $table->float('interest_rate', 3,1);
            $table->integer('loan_term');

            $table->unsignedInteger('program_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('car_id');

            $table->index('program_id', 'program_idx');
            $table->index('user_id', 'user_idx');
            $table->index('car_id', 'car_idx');

            $table->foreign('program_id', 'program_fk')->on('credit_forms')->references('id');
            $table->foreign('user_id', 'user_fk')->on('users')->references('id');
            $table->foreign('car_id', 'car_fk')->on('cars')->references('id');

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
        Schema::dropIfExists('credit_requests');
    }
}
