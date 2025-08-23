<?php // app/Models/Payout.php
namespace App\Models;

use App\Models\Vendeur;
use Illuminate\Database\Eloquent\Model;

class Payout extends Model
{
    protected $guarded = [];
    protected $casts = ['details'=>'array','paid_at'=>'datetime'];
    public function vendeur(){ return $this->belongsTo(Vendeur::class); }
}
