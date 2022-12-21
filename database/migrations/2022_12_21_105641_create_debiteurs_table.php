<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDebiteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debiteurs', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('code_debiteur');
            $table->string('pays');
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
        Schema::dropIfExists('debiteurs');
    }
}
