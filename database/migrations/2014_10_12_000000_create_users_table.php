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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->char('sexe');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('adresse');
            $table->string('tel')->unique();
            $table->string('date');
            $table->string('lieux');
            $table->string('password');
            $table->rememberToken();
            $table->string('role')->default('patient');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
