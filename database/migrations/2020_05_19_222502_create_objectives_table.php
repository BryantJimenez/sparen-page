<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objectives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title1_spanish')->nullable();
            $table->string('title1_english')->nullable();
            $table->text('content1_spanish')->nullable();
            $table->text('content1_english')->nullable();
            $table->string('title2_spanish')->nullable();
            $table->string('title2_english')->nullable();
            $table->text('content2_spanish')->nullable();
            $table->text('content2_english')->nullable();
            $table->string('title3_spanish')->nullable();
            $table->string('title3_english')->nullable();
            $table->text('content3_spanish')->nullable();
            $table->text('content3_english')->nullable();
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
        Schema::dropIfExists('objectives');
    }
}
