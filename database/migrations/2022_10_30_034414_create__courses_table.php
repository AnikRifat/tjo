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
            $table->string('price')->nullable();
            $table->string('image')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('preview',500)->nullable();
            $table->string('intro')->nullable();
            $table->longText('overview',10000)->nullable();
            $table->string('duration')->nullable();
            $table->string('classes')->nullable();
            $table->string('category')->nullable();
            $table->string('category_id')->nullable();
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
