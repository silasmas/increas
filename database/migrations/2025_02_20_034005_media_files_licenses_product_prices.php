<?php
// 2025_08_20_000003_create_media_files_licenses_product_prices_tables.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        // LICENCES GÉNÉRIQUES (STD, EXT, EDITORIAL…)
        Schema::create('media_licences', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique(); // ex: STD, EXT
            $table->string('label');          // nom lisible
            $table->boolean('commercial')->default(true);
            $table->text('terms')->nullable(); // conditions d’usage
            $table->json('usage_limites')->nullable(); // ex: nombre de copies, etc.
            $table->timestamps();
        });

        // FICHIERS (versions / previews / thumbnail)
        Schema::create('media_fichiers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produit_id')->constrained('produits')->cascadeOnDelete();
            $table->enum('type', ['master', 'preview', 'thumbnail'])->default('master');
            $table->string('storage_path'); // chemin disque/S3
            $table->string('format', 10)->nullable(); // jpg, png, mp4, wav…
            $table->unsignedBigInteger('poids_octets')->nullable();
            $table->unsignedInteger('largeur')->nullable();
            $table->unsignedInteger('hauteur')->nullable();
            $table->unsignedInteger('duree_sec')->nullable(); // pour audio/vidéo
            $table->string('hash')->nullable(); // contrôle d’intégrité
            $table->enum('status', ['active', 'replaced'])->default('active');
            $table->timestamps();

            $table->index(['produit_id', 'type']);
        });

        // TARIFS PAR LICENCE (spécifiques à chaque produit)
        Schema::create('produit_licence_tarifs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produit_id')->constrained('produits')->cascadeOnDelete();
            $table->foreignId('licence_id')->constrained('media_licences')->restrictOnDelete();
            $table->unsignedInteger('prix');  // centimes
            $table->unsignedInteger('promotion_prix')->nullable(); // centimes
            $table->string('devise', 3)->default('USD');
            $table->timestamps();

            $table->unique(['produit_id', 'licence_id']);
        });
    }

    public function down(): void {
        Schema::dropIfExists('produit_licence_tarifs');
        Schema::dropIfExists('media_fichiers');
        Schema::dropIfExists('media_licences');
    }
};
