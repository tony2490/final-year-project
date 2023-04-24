<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //  this function creates the fields for this table 
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('email');
            $table->string('role');
            $table->string('name');
            $table->integer('astonID');
            $table->string('studentType');
            $table->string('courseStudied');
            $table->string('relevantModuleGrades');
            $table->text('reasonForApplying');
            $table->string('placementComplete');
            $table->text('supportingInfo');
            $table->string('status');
            $table->string('unavailableDates');
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
        Schema::dropIfExists('applications');
    }
};
