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
        Schema::create('cv_loisirs', function (Blueprint $table) {
            $table->id();

            $table->foreignId('cv_profil_id')->constrained('cv_profils')->onDelete('cascade');
            $table->string('loisir'); // Nom du loisir
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cv_loisirs');
    }
};
