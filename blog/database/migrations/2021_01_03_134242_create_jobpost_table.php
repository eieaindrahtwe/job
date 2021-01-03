<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobpostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobpost', function (Blueprint $table) {
            $table->id();
            $table->text('photo');
            $table->string('email');
            $table->string('job_title');
            $table->string('location');
            $table->string('job_region');
            $table->string('job_type');
            $table->string('job_description');
            $table->string('company_name');
            $table->string('company_description');
            $table->string('website');
            // $table->unsignedBigInteger('jobcategory_id');
            // $table->foreign('jobcategory_id')->references('id')->on('jobcategories')->onDelete('cascade');

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
        Schema::dropIfExists('jobpost');
    }
}
