<?php // app/Models/ProduitLicenceTarif.php
namespace App\Models;

use App\Models\Produit;
use App\Models\MediaLicence;
use Illuminate\Database\Eloquent\Model;

class ProduitLicenceTarif extends Model
{
    protected $table = 'produit_licence_tarifs';
    protected $guarded = [];

    public function produit(){ return $this->belongsTo(Produit::class); }
    public function licence(){ return $this->belongsTo(MediaLicence::class, 'licence_id'); }
}
