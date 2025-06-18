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
        Schema::create('cv_experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cv_profil_id')->constrained('cv_profils')->onDelete('cascade');
            $table->string('poste');
            $table->string('entreprise');
            $table->string('ville')->nullable();
            $table->string('date_debut')->nullable();
            $table->string('date_fin')->nullable();
            $table->text('description')->nullable();
            $table->boolean('is_current')->default(false);
            $table->string('contrat_type')->nullable(); // Type de contrat (CDI, CDD, Stage, Freelance, etc.)
            $table->string('secteur_activite')->nullable(); // Secteur d'activité de l'entreprise
            $table->string('url_entreprise')->nullable(); // URL de l'entreprise
            $table->string('url_poste')->nullable(); // URL du poste ou de l'annonce
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cv_experiences');
    }
};
