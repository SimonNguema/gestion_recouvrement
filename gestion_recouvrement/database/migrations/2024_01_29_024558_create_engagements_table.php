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
        Schema::create('engagements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idProgramme');
            $table->unsignedBigInteger('idCampus');
            $table->unsignedBigInteger('idNiveau');
            $table->unsignedBigInteger('idRythme');
            $table->unsignedBigInteger('idAnneeAcademique');


            $table->foreign('idProgramme')->references('id')->on('programmes')->onDelete('cascade');
            $table->foreign('idCampus')->references('id')->on('campuses')->onDelete('cascade');
            $table->foreign('idNiveau')->references('id')->on('niveaux')->onDelete('cascade');
            $table->foreign('idRythme')->references('id')->on('rythmes')->onDelete('cascade');
            $table->foreign('idAnneeAcademique')->references('id')->on('annee_academiques')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('engagements');
    }
};
