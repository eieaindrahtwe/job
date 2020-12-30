<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobposts', function (Blueprint $table) {
            $table->id();
            $table->string('position');
            $table->string('companyname');
            $table->string('salary');
            $table->string('address');
            $table->string('descriptions');
            $table->string('requirements');
            $table->unsignedBigInteger('jobcategory_id');
            $table->foreign('jobcategory_id')->references('id')->on('jobcategories')->onDelete('cascade');
            $table->string('date');
            
            
            
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
        Schema::dropIfExists('jobposts');
    }
}
