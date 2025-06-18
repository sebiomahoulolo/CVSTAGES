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
        Schema::create('cv_references', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cv_profil_id')->constrained('cv_profils')->onDelete('cascade');
            $table->string('nom'); // Nom de la référence
            $table->string('relation'); // Relation avec la référence (ex: Ancien employeur, Professeur, etc.)
            $table->string('email')->nullable(); // Email de la référence
            $table->string('telephone')->nullable(); // Téléphone de la référence
            $table->text('commentaire')->nullable(); // Commentaire ou note sur la référence
            $table->boolean('is_current')->default(false); // Indique si la référence est toujours d'actualité
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cv_references');
    }
};
