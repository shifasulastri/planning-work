<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRisksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('risks', function (Blueprint $table) {
            $table->id();
            $table->date('start_date');
            $table->text('description_ofrisk');
            $table->string('submitter');
            $table->string('name_project');
            $table->integer('probability_factor');
            $table->integer('impact_factor');
            $table->integer('exposure');
            $table->string('Risk_reponse_type');
            $table->string('Risk_reponse_plan');
            $table->string('assigned_to');
            $table->string('status');
            $table->date('due_date');
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
        Schema::dropIfExists('risks');
    }
}
