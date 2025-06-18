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
        Schema::create('cv_projets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cv_profil_id')->constrained('cv_profils')->onDelete('cascade');
            $table->string('titre'); // Titre du projet
            $table->text('description'); // Description du projet
            $table->string('technologies')->nullable(); // Technologies utilisées dans le projet
            $table->string('lien')->nullable(); // Lien vers le projet (GitHub, site web, etc.)
            $table->date('date_debut')->nullable(); // Date de début du projet
            $table->date('date_fin')->nullable(); // Date de fin du projet
            $table->boolean('is_current')->default(false); // Indique si le projet est en cours

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cv_projets');
    }
};
