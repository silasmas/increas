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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Utilisateur
            $table->foreignId('produit_id')->constrained()->onDelete('cascade'); // Produit
            $table->decimal('price', 10, 2); // Prix au moment de l'achat
            $table->string('curency');
            $table->integer('quantity')->default(1); // Quantité
            $table->decimal('total_price', 10, 2); // Prix total
            $table->enum('status', ['pending', 'completed', 'cancelled'])->default('pending'); // Statut
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
