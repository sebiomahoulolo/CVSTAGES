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
        Schema::create('cv_profils', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('title');
            $table->string('email');
            $table->string('phone');
            $table->string('city');
            $table->string('url_linkedin')->nullable();
            $table->string('url_portfolio')->nullable();
            $table->string('photo')->nullable();
            $table->string('situation_mat')->nullable();
            $table->string('nationality');
            $table->date('birthday');
            $table->string('lieu_naissance');
            $table->string('resume');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cv_profils');
    }
};
