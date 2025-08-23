<?php
// 2025_08_20_000002_create_vendeurs_wallets_payouts_tables.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('vendeurs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained('users')->cascadeOnDelete();
            $table->string('display_name');
            $table->text('bio')->nullable();
            $table->string('pays', 2)->nullable(); // ISO code
            $table->string('site_web')->nullable();
            $table->json('reseaux')->nullable(); // liens sociaux
            $table->enum('statut', ['pending', 'approved', 'banned'])->default('pending');
            $table->unsignedInteger('commission_personnalisee')->nullable(); // en pourcent *100 (ex: 1500 = 15.00%)
            $table->timestamps();
        });

        Schema::create('portefeuilles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vendeur_id')->unique()->constrained('vendeurs')->cascadeOnDelete();
            $table->unsignedBigInteger('solde_courant')->default(0);     // centimes disponibles
            $table->unsignedBigInteger('solde_en_attente')->default(0);  // en période d’attente (anti-fraude/remboursements)
            $table->timestamps();
        });

        Schema::create('payouts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vendeur_id')->constrained('vendeurs')->cascadeOnDelete();
            $table->unsignedBigInteger('montant'); // centimes
            $table->string('devise', 3)->default('USD');
            $table->enum('methode', ['bank', 'mobile_money', 'paypal', 'autre'])->default('bank');
            $table->json('details')->nullable(); // IBAN, mobile, etc.
            $table->enum('status', ['requested', 'processing', 'paid', 'failed'])->default('requested');
            $table->string('reference')->nullable();
            $table->timestamp('paid_at')->nullable();
            $table->timestamps();

            $table->index(['vendeur_id', 'status']);
        });
    }

    public function down(): void {
        Schema::dropIfExists('payouts');
        Schema::dropIfExists('portefeuilles');
        Schema::dropIfExists('vendeurs');
    }
};
