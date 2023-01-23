<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRappelPaiementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rappel__paiements', function (Blueprint $table) {
            $table->id();
            $table->date('date_envoi');
            $table->text('contenu');
            $table->unsignedBigInteger('id_creance');
            $table->foreign('id_creance')->references('id')->on('creance');
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
        Schema::dropIfExists('rappel__paiements');
    }
}
