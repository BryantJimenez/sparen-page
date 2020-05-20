<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('banners', function (Blueprint $table) {
       $table->bigIncrements('id');
       $table->string('banner1_spanish')->nullable();
       $table->string('banner1_english')->nullable();
       $table->string('banner2_spanish')->nullable();
       $table->string('banner2_english')->nullable();
       $table->string('banner3_spanish')->nullable();
       $table->string('banner3_english')->nullable();
       $table->string('picture1');
       $table->string('picture2');
       $table->string('picture3');
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
      Schema::dropIfExists('banners');
    }
  }
