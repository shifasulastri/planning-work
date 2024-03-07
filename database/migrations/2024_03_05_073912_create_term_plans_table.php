<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTermPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('term_plans', function (Blueprint $table) {
            $table->id();
            $table->string('term_type');
            $table->string('value_term');
            $table->string('value_rp_term');
            $table->string('month_plan');
            $table->string('option_available');
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
        Schema::dropIfExists('term_plans');
    }
}
