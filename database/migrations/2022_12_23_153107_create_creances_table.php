<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creances', function (Blueprint $table) {
            $table->id();
            $table->string('code_creance');
            $table->string('nature_creance');
            $table->string('ecr');
            $table->string('mp');
            $table->string('remise');
            $table->string('decote');
            $table->string('statut');
            $table->string('action');
            $table->string('date_recep');
            $table->string('total');
            $table->string('mci');
            $table->string('abandon');
            $table->string('code_client');
            $table->string('objet');
            $table->string('int_recep');
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
        Schema::dropIfExists('creances');
    }
}
