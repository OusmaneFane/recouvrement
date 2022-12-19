<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataRemisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data__remises', function (Blueprint $table) {
            $table->id();
            $table->string('code_creancier');
            $table->string('contrat');
            $table->string('agence');
            $table->string('type_remise');
            $table->string('objet_remise');
            $table->string('rs_creancier');
            $table->string('nom_remise');
            $table->string('app_remise');
            $table->string('date_reception');
            $table->string('filiale');
            $table->string('type_agence');
            $table->string('charge_client');
            $table->string('nbre_dossier');
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
        Schema::dropIfExists('data__remises');
    }
}
