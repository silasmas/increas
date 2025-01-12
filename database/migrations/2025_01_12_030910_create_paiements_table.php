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
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->enum('payment_method', ['credit_card', 'paypal', 'mobile'])->default('mobile'); // Méthode de paiement
            $table->enum('status', ['pending', 'completed', 'failed'])->default('pending'); // Statut du paiement
            $table->string('transaction_id')->nullable(); // ID de transaction
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiements');
    }
};
