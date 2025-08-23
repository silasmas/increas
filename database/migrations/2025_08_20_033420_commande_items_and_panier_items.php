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
         // LIGNES DE COMMANDE
        Schema::create('commande_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('commande_id')->constrained('commandes')->cascadeOnDelete();
            $table->foreignId('produit_id')->constrained('produits')->restrictOnDelete();

            // Snapshots pour ne pas dépendre d'éventuels changements après l'achat
            $table->string('titre_snapshot');
            $table->unsignedBigInteger('fichier_version_id')->nullable(); // media_fichiers.id (version précise)
            $table->foreignId('licence_id')->nullable()->constrained('media_licences')->nullOnDelete();

            $table->unsignedInteger('quantite')->default(1);
            $table->unsignedInteger('prix_unitaire'); // en centimes (ex: 1000 = 10.00)
            $table->unsignedInteger('taxes')->default(0);
            $table->unsignedInteger('commission')->default(0); // commission plateforme sur cette ligne, en centimes
            $table->unsignedInteger('total_ligne'); // (prix_unitaire * qte + taxes) - remises éventuelles

            $table->string('devise', 3)->default('USD');
            $table->timestamps();

            $table->index(['commande_id', 'produit_id']);
        });
          // LIGNES DE PANIER
        Schema::create('panier_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('panier_id')->constrained('paniers')->cascadeOnDelete();
            $table->foreignId('produit_id')->constrained('produits')->restrictOnDelete();
            $table->foreignId('licence_id')->nullable()->constrained('media_licences')->nullOnDelete();
            $table->unsignedInteger('quantite')->default(1);
            $table->json('options')->nullable(); // variantes, notes, etc.
            $table->timestamps();

            $table->unique(['panier_id', 'produit_id', 'licence_id']); // éviter doublons
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('panier_items');
        Schema::dropIfExists('commande_items');
    }
};
