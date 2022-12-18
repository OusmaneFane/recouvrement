<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataProspectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data__prospects', function (Blueprint $table) {
            $table->id();
            $table->string('prospect_type');
            $table->string('nature');
            $table->string('apporteur');
            $table->string('statut');
            $table->string('pays');
            $table->string('type_apporteur');
            $table->string('charge_client');
            $table->string('capital');
            $table->string('forme_juridique');
            $table->string('secteur_activite');
            $table->string('rc');
            $table->string('nom_resp');
            $table->string('raison_sociale');
            $table->string('activite');
            $table->string('mf_ref');
            $table->string('prenom_resp');
            $table->string('abrev');
            $table->string('designation');
            $table->string('type_tva');
            $table->string('qua_resp');
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
        Schema::dropIfExists('data__prospects');
    }
}
