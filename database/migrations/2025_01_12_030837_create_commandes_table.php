<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();

            // Identifiants
            $table->string('numero')->unique();   // ex: ORD-2025-000123
            $table->foreignId('acheteur_id')
                  ->constrained('users')->cascadeOnDelete();

            // Statut & devise
            $table->enum('status', ['pending','paid','failed','refunded'])->default('pending');
            $table->string('devise', 3)->default('USD');

            // Montants figés (centimes) — résumé pour reporting
            $table->unsignedBigInteger('total_ht')->default(0);
            $table->unsignedBigInteger('taxes')->default(0);
            $table->unsignedBigInteger('commission_totale')->default(0);
            $table->unsignedBigInteger('total_ttc')->default(0);

            // Paiement (snapshot provider)
            $table->string('provider')->nullable();           // Stripe, PayPal, Flutterwave...
            $table->string('provider_intent_id')->nullable(); // payment intent / ref
            $table->timestamp('paid_at')->nullable();

            // Facturation légère (optionnel)
            $table->string('billing_name')->nullable();
            $table->string('billing_email')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->index(['acheteur_id', 'status']);
            $table->index('paid_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
