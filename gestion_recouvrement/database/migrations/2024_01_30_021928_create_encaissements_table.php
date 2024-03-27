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
        Schema::create('encaissements', function (Blueprint $table) {
            $table->id();
            $table->decimal('montantTotalEngagement', 15, 2);
            $table->decimal('montantTrancheEngagement', 15, 2);
            $table->decimal('montantEncaisser', 15, 2);
            $table->decimal('montantRestant', 15, 2)->nullable();
            $table->dateTime('dateEncaissement')->default(now());
            $table->string('modeEncaissement')->default('Espece');
            $table->string('statusEncaissement');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encaissements');
    }
};
