<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('paniers', function (Blueprint $table) {
            $table->id();

            // Panier utilisateur… ou invité (session)
            $table->foreignId('user_id')->nullable()
                  ->constrained('users')->nullOnDelete();
            $table->string('session_id')->nullable();

            // État & devise d’affichage
            $table->enum('status', ['active','converted','abandoned'])->default('active');
            $table->string('devise', 3)->default('USD');

            // Expiration (nettoyage paniers abandonnés)
            $table->timestamp('expires_at')->nullable();

            $table->timestamps();

            $table->index(['user_id', 'session_id', 'status']);
            $table->index('expires_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('paniers');
    }
};
