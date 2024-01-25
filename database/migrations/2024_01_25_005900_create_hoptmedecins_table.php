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
        Schema::create('hoptmedecins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_medecin');
            $table->unsignedBigInteger('id_hopital');

            $table->foreign('id_medecin')->references('id')->on('medecins');

            $table->foreign('id_hopital')->references('id')->on('hopitals');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoptmedecins');
    }
};