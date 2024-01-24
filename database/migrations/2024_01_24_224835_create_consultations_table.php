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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->string('Plaintes_Symptomes');
            $table->string('Autre_Examens_Para_Clinique');
            $table->string('Diagnostic');
            $table->string('Traitement');
            $table->string('Observations');
            $table->unsignedBigInteger('id_patient');
            $table->unsignedBigInteger('id_medecin');

            //declaration de la cle etrangere

            $table->foreign('id_patient')->references('id')->on('patients');
            $table->foreign('id_medecin')->references('id')->on('medecins');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultations');
    }
};