<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravauxPratiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travaux_pratiques', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('sesson_id');
            $table->foreign('sesson_id')->references('id')->on('sessions')
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
        Schema::dropIfExists('travaux_pratiques');
    }
}
