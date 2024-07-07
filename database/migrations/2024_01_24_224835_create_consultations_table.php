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
            $table->string('plaintes_Symptomes');
            $table->string('autre_Examens_Para_Clinique');
            $table->string('diagnostic');
            $table->string('traitement');
            $table->string('observations');
            $table->unsignedBigInteger('id_patient');
            $table->unsignedBigInteger('id_medecin');

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
        Schema::dropIfExists('consultations');
    }
};
