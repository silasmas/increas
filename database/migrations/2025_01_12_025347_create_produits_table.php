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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Titre du produit
            $table->text('description')->nullable(); // Description du produit
            $table->decimal('price', 10, 2); // Prix
            $table->string('curency');
            $table->string('slug');
            $table->text('moreDescription')->nullable();
			$table->longtext('additionalInfos')->nullable();
            $table->json('image_urls'); // Chemin du fichier image
            $table->string('thumbnail_path')->nullable(); // Chemin de la miniature
            $table->foreignId('category_id')->nullable()->constrained()->onDelete('set null'); // Catégorie
            $table->boolean('isAvalable');
			$table->boolean('isBestseler');
			$table->boolean('isNewArivale');
			$table->boolean('isFeatured');
			$table->boolean('isSpecialOffer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
