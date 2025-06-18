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
        Schema::create('cv_competences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cv_profil_id')->constrained('cv_profils')->onDelete('cascade');
            $table->string('competence');
            $table->string('niveau')->nullable();
            $table->string('categorie')->nullable(); // Catégorie de compétence (Langages, Frameworks, etc.)
            $table->text('description')->nullable(); // Description de la compétence
            $table->boolean('is_current')->default(false); // Indique si la compétence est toujours d'actualité

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cv_competences');
    }
};
