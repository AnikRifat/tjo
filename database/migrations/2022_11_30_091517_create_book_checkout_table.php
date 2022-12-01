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
        Schema::create('book_checkouts', function (Blueprint $table) {
            $table->id();
            $table->string('book_id');
            $table->string('course_id');
            $table->string('type')->default('0')->comment('0 -> pending , 1-> accepted,2->declined');
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
        Schema::dropIfExists('book_checkouts');
    }
};
