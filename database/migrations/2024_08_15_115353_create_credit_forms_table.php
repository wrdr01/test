<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_forms', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->float('interest_rate', 3, 1, true);
            $table->float('initial_payment', 10, 2, true);
            $table->unsignedInteger('pre_monthly_payment');
            $table->unsignedInteger('loan_term');
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
        Schema::dropIfExists('credit_forms');
    }
}
