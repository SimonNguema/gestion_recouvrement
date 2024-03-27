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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('nomEtudiant');
            $table->string('prenomEtudiant');
            $table->date('dateNaissance');
            $table->string('adresseEtudiant');
            $table->string('telephoneEtudiant');
            $table->string('photoEtudiant')->nullable();
            $table->string('emailEtudiant')->unique();
            $table->unsignedBigInteger('idUser')->nullable();
            $table->foreign('idUser')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
