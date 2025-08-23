<?php // app/Models/Vendeur.php
namespace App\Models;

use App\Models\User;
use App\Models\Payout;
use App\Models\Produit;
use App\Models\Portefeuille;
use Illuminate\Database\Eloquent\Model;

class Vendeur extends Model
{
    protected $gurded = [];
    protected $casts = ['reseaux' => 'array'];

    public function user(){ return $this->belongsTo(User::class); }
    public function portefeuille(){ return $this->hasOne(Portefeuille::class); }
    public function produits(){ return $this->hasMany(Produit::class, 'seller_id'); }
    public function payouts(){ return $this->hasMany(Payout::class); }
}
