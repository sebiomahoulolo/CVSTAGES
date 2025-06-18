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
        Schema::create('cv_certifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cv_profil_id')->constrained('cv_profils')->onDelete('cascade');
            $table->string('certification'); // Nom de la certification
            $table->string('organisme'); // Organisme délivrant la certification
            $table->string('date_obtention')->nullable(); // Date d'obtention de la certification
            $table->string('date_expiration')->nullable(); // Date d'expiration de la certification
            $table->text('description')->nullable(); // Description ou commentaires sur la certification
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cv_certifications');
    }
};
