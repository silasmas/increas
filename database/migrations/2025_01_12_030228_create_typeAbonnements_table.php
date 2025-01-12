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
        Schema::create('typeAbonnements', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // Nom du type d'abonnement
            $table->text('description')->nullable(); // Description des avantages
            $table->decimal('price', 10, 2); // Prix du type d'abonnement
            $table->string('curency');
            $table->integer('duration'); // Durée de l'abonnement en jours (ex : 30 jours)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_abonnements');
    }
};
