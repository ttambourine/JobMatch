<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Jobs and Growth Jobs and Growth Jobs and Growth Jobs and Growth Jobs and Growth
        // Jobs and Growth Jobs and Growth Jobs and Growth Jobs and Growth Jobs and Growth
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid')->unsigned()->nullable();
            $table->longText('description');
            $table->integer('amount');
            $table->dateTime('due_date');
            $table->integer('applicantid')->unsigned()->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
