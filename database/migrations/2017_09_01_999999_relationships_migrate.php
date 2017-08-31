<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationshipsMigrate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applicants', function($table) {
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('jobid')->references('id')->on('jobs')->onDelete('cascade');
        });

        Schema::table('jobs', function($table) {
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('applicantid')->references('id')->on('applicants');
        });

        Schema::table('reviews', function($table) {
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('jobid')->references('id')->on('jobs')->onDelete('cascade');
        });

        Schema::table('usertags', function($table) {
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('tagid')->references('id')->on('tags')->onDelete('cascade');
        });

        Schema::table('jobtags', function($table) {
            $table->foreign('jobid')->references('id')->on('jobs')->onDelete('cascade');
            $table->foreign('tagid')->references('id')->on('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
