<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaylisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daylis', function (Blueprint $table) {
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->references('id')->on('courses')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('session_id');
            $table->foreign('session_id')->references('id')->on('sessions')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->date('date');
            
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
        Schema::dropIfExists('daylis');
    }
}
