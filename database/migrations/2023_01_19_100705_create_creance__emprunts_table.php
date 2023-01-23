<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreanceEmpruntsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creance__emprunts', function (Blueprint $table) {
            $table->id();
            $table->string('montant');
            $table->date('date_dette');
            $table->date('date_echeance');
            $table->unsignedBigInteger('id_emprunteur');
            $table->foreign('id_emprunteur')->references('id')->on('emprunteurs');
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
        Schema::dropIfExists('creance__emprunts');
    }
}
