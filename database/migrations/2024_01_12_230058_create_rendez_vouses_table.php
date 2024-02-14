<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rendez_vouses', function (Blueprint $table) {
            $table->id()    ;
            $table->string('heure');
            $table->string('statut')->default('encours');
            $table->date('date');
            $table->integer('rang')->nullable();
            $table->unsignedBigInteger('id_patient')->nullable();
            $table->unsignedBigInteger('id_medecin')->nullable();


            //declaration de la cle etrangere

            $table->foreign('id_patient')->references('id')->on('users');
            $table->foreign('id_medecin')->references('id')->on('medecins');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendez_vouses');
    }
};
