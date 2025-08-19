<?php

namespace App\Models;

use App\Models\Panier;
use App\Models\Favorie;
use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produit extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function favorie()
    {
        return $this->belongsToMany(Favorie::class);
    }
    public function panier()
    {
        return $this->belongsToMany(Panier::class);
    }

	public function tags()
	{
		
		return $this->belongsToMany(\App\Models\Tag::class);
	
	}

}
