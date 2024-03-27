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
        Schema::create('etudiant_engagement_montants', function (Blueprint $table) {
            $table->id();
            $table->decimal('montantFixe');
            $table->decimal('montantSolder');
            //$table->unsignedBigInteger('idEtudiantEngagement');
            //$table->foreign('idEtudiantEngagement')->references('id')->on('etudiant_engagements');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiant_engagement_montants');
    }
};
