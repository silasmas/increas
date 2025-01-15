<?php

namespace App\Models;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;
use Biostate\FilamentMenuBuilder\Traits\Menuable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory;
    use Menuable;
    protected $guarded = [];

    public function getMenuLinkAttribute(): string
    {
        return route('products.show', $this);
    }

    public function getMenuNameAttribute(): string
    {
        return $this->name;
    }
    public function produit()
    {
        return $this->hasMany(Produit::class);
    }
}
