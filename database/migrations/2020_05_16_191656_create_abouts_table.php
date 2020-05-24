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
            $table->text('paragraph_spanish')->nullable();
            $table->text('paragraph_english')->nullable();
            $table->string('list1_spanish')->nullable();
            $table->string('list1_english')->nullable();
            $table->string('list2_spanish')->nullable();
            $table->string('list2_english')->nullable();
            $table->string('list3_spanish')->nullable();
            $table->string('list3_english')->nullable();
            $table->string('list4_spanish')->nullable();
            $table->string('list4_english')->nullable();
            $table->string('picture');
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
