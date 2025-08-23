<?php // app/Models/MediaFichier.php
namespace App\Models;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;

class MediaFichier extends Model
{
    protected $guarded = [];
    public function produit(){ return $this->belongsTo(Produit::class); }
}
