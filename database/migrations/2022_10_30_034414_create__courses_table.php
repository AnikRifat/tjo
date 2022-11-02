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
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_id');
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('preview')->nullable();
            $table->string('intro')->nullable();
            $table->string('overview')->nullable();
            $table->string('course_plan')->nullable();
            $table->string('duration')->nullable();
            $table->string('classes')->nullable();
            $table->string('type')->nullable()->comment('0 -> pre-recorded , 1-> live class');
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
        Schema::dropIfExists('courses');
    }
};
