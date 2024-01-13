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
        Schema::create('don_de_sangs', function (Blueprint $table) {
            $table->id();
            $table->string('Groupe');
            $table->unsignedBigInteger('id_patient');

            //declaration de la cle etrangere

            $table->foreign('id_patient')->references('id')->on('patients');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('don_de_sangs');
    }
};