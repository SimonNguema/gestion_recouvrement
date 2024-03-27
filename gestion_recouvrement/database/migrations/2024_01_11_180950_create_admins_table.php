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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('nomAdmin');
            $table->string('prenomAdmin');
            $table->string('adresseAdmin');
            $table->string('telephoneAdmin');
            $table->string('emailAdmin')->unique();
            $table->string('roleAdmin');
            //$table->enum('roleAdmin', ['Admin', 'Super_admin']);
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
        Schema::dropIfExists('admins');
    }
};
