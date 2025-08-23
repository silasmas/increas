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
		Schema::create('tags', function (Blueprint $table) {
        	$table->id();
        	$table->string('name')->nullable();
        	$table->timestamps();
        });

		Schema::create('produit_tag', function (Blueprint $table) {
                    $table->foreignIdFor(\App\Models\Tag::class)->constrained()->onDelete('cascade');
                    $table->foreignIdFor(\App\Models\Produit::class)->constrained()->onDelete('cascade');
                    $table->primary(['tag_id','produit_id']);
                    $table->timestamps();
                });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};
