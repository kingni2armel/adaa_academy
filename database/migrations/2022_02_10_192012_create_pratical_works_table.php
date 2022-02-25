<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePraticalWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pratical_works', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('session_id');
            $table->foreign('session_id')->references('id')->on('sessions')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->text('intitule');

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
        Schema::dropIfExists('pratical_works');
    }
}
