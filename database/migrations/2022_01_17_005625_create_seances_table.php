<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seances', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('cour_id');
            $table->foreign('cour_id')->references('id')->on('cours')
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
        Schema::dropIfExists('seances');
    }
}
