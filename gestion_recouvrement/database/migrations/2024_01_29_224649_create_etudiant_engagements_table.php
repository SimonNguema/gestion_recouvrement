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
        Schema::create('etudiant_engagements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idEtudiant');
            $table->unsignedBigInteger('idEngagementTypeFrais');
            $table->integer('nombreTrancheChoisie')->nullable();

            $table->foreign('idEtudiant')->references('id')->on('etudiants')->onDelete('cascade');
            $table->foreign('idEngagementTypeFrais')->references('id')->on('engagement_type_frais')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiant_engagements');
    }
};
