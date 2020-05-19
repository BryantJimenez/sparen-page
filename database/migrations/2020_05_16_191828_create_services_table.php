<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title1_spanish');
            $table->string('title1_english');
            $table->string('content1_spanish');
            $table->string('content1_english');
            $table->string('title2_spanish');
            $table->string('title2_english');
            $table->string('content2_spanish');
            $table->string('content2_english');
            $table->string('title3_spanish');
            $table->string('title3_english');
            $table->string('content3_spanish');
            $table->string('content3_english');
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
        Schema::dropIfExists('services');
    }
}
