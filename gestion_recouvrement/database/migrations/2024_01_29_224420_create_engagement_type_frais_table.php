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
        Schema::create('engagement_type_frais', function (Blueprint $table) {
            $table->id();
            $table->integer('nombreTranche');
            $table->decimal('montantTranche', 15, 2)->nullable;
            $table->decimal('totalFrais', 15, 2);
            $table->unsignedBigInteger('idTypeFrais');
            $table->unsignedBigInteger('idProgramme');
            $table->unsignedBigInteger('idCampus');
            $table->unsignedBigInteger('idNiveau');
            $table->unsignedBigInteger('idRythme');
            $table->unsignedBigInteger('idAnneeAcademique');

            $table->foreign('idTypeFrais')->references('id')->on('type_frais')->onDelete('cascade');
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
        Schema::dropIfExists('engagement_type_frais');
    }
};
