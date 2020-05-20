<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('paragraph1_spanish')->nullable();
            $table->string('paragraph1_english')->nullable();
            $table->string('paragraph2_spanish')->nullable();
            $table->string('paragraph2_english')->nullable();
            $table->string('list1_spanish')->nullable();
            $table->string('list1_english')->nullable();
            $table->string('list2_spanish')->nullable();
            $table->string('list2_english')->nullable();
            $table->string('list3_spanish')->nullable();
            $table->string('list3_english')->nullable();
            $table->string('picture');
            $table->integer('visits');
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
        Schema::dropIfExists('abouts');
    }
}
