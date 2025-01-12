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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Utilisateur
            $table->foreignId('commande_id')->nullable()->constrained()->onDelete('set null'); // Référence à la commande
            $table->foreignId('abonnement_id')->nullable()->constrained()->onDelete('set null'); // Référence à l'abonnement
            $table->decimal('amount', 10, 2); // Montant payé
            $table->string('curency');
            $table->enum('payment_method', ['credit_card', 'paypal', 'stripe'])->default('credit_card'); // Méthode de paiement
            $table->enum('status', ['pending', 'completed', 'failed'])->default('pending'); // Statut de la transaction

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
