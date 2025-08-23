<?php // app/Models/Portefeuille.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portefeuille extends Model
{
    protected $guarded = [];
    public function vendeur(){ return $this->belongsTo(Vendeur::class); }
}
