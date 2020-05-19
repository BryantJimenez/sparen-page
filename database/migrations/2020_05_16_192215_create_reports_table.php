<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_spanish')->nullable();
            $table->string('title_english')->nullable();
            $table->string('slug')->unique();
            $table->string('pdf_spanish')->nullable();
            $table->string('pdf_english')->nullable();
            $table->text('description_spanish')->nullable();
            $table->text('description_english')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();

            #Relations
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
