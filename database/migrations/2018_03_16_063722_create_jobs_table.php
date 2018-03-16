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
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Posting_Title');
            $table->string('Job_Type');
            $table->string('Job_Categories');
            $table->string('Location');
            $table->string('Publish');
            $table->string('Client_Name');
            $table->string('Contact_Name');
            $table->text('Job_Descriptio');
            $table->string('No_of_Candidates_Hired');
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
