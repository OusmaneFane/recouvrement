<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmprunteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprunteurs', function (Blueprint $table) {
            $table->id();
            $table->string('identifiant');
            $table->string('nom');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('email');
            $table->text('infofinancieres');
            $table->text('detailsdupret');
            $table->text('infopaiement');
            $table->text('historique');
            $table->string('statutcreance');
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
        Schema::dropIfExists('emprunteurs');
    }
}
