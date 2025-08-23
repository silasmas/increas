<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();

            // Propriétaire (vendeur) & catégorie principale
            $table->foreignId('seller_id')->nullable()
                  ->constrained('vendeurs')->nullOnDelete();
            $table->foreignId('category_id')->nullable()
                  ->constrained('categories')->nullOnDelete();

            // Métadonnées produit
            $table->string('titre');                 // ex: “Pack d’icônes minimal”
            $table->string('slug')->unique();        // URL lisible
            $table->longText('description')->nullable();

            // Type de média (filtrage rapide)
            $table->enum('media_kind', ['image','video','audio','document','autre'])
                  ->default('image');

            // Fichier d’aperçu (miniature/preview) — pas de FK pour éviter un cycle
            $table->unsignedBigInteger('apercu_fichier_id')->nullable();
            $table->index('apercu_fichier_id');

            // Workflow
            $table->enum('status', ['draft','pending','approved','rejected','disabled'])
                  ->default('draft');

            // Agrégats d’avis (remplis via vue ou job)
            $table->decimal('rating_avg', 3, 2)->default(0);
            $table->unsignedInteger('rating_count')->default(0);

            // Divers
            $table->json('meta')->nullable();        // zone libre (ex: specs)
            $table->timestamps();
            $table->softDeletes();

            $table->index(['seller_id', 'category_id', 'status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
