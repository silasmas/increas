<?php
// 2025_08_20_000004_create_achats_licences_and_download_tokens_tables.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        // DROITS ACCORDÉS APRÈS ACHAT
        Schema::create('achats_licences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('commande_item_id')->constrained('commande_items')->cascadeOnDelete();
            $table->foreignId('acheteur_user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('licence_id')->constrained('media_licences')->restrictOnDelete();
            $table->string('cle_licence')->unique(); // token lisible si tu veux
            $table->timestamp('expires_at')->nullable(); // si licence limitée dans le temps
            $table->timestamps();

            $table->index(['acheteur_user_id', 'licence_id']);
        });

        // LIENS / JETONS DE TÉLÉCHARGEMENT SÉCURISÉS
        Schema::create('download_tokens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('commande_item_id')->constrained('commande_items')->cascadeOnDelete();
            $table->uuid('token')->unique();
            $table->unsignedInteger('compteur')->default(0); // nb téléchargements effectués
            $table->timestamp('expires_at')->nullable();
            $table->string('ip_last')->nullable();
            $table->string('user_agent_last')->nullable();
            $table->timestamps();

            $table->index(['commande_item_id', 'expires_at']);
        });
    }

    public function down(): void {
        Schema::dropIfExists('download_tokens');
        Schema::dropIfExists('achats_licences');
    }
};
