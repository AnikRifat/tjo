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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('course_id');
            $table->string('name')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('price')->nullable();
            $table->string('discount')->nullable();
            $table->string('discounted_price')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('type')->nullable()->comment('0 -> pre-recorded , 1-> live class');
            $table->string('hasDiscount')->nullable()->comment('0 -> no , 1-> yes');
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
        Schema::dropIfExists('campaigns');
    }
};
