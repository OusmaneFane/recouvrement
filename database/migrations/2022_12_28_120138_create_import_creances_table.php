<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportCreancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('import_creances', function (Blueprint $table) {
            $table->id();
            $table->string('code_creancier');
            $table->string('nom_remise');
            $table->string('type_deb');
            $table->string('rs');
            $table->string('name');
            $table->string('size');
            $table->string('type');
            $table->string('path');
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
        Schema::dropIfExists('import_creances');
    }
}
