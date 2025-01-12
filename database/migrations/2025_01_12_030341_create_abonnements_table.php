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
        Schema::create('abonnements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Utilisateur
            $table->foreignId('typeAbonnement_id')->constrained()->onDelete('cascade'); // Type d'abonnement
            $table->enum('status', ['active', 'cancelled', 'expired'])->default('active'); // Statut de l'abonnement
            $table->date('start_date'); // Date de début
            $table->date('end_date'); // Date de fin
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abonnements');
    }
};
