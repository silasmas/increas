<?php // app/Models/PanierItem.php
namespace App\Models;

use App\Models\Panier;
use App\Models\Produit;
use App\Models\MediaLicence;
use Illuminate\Database\Eloquent\Model;

class PanierItem extends Model
{
    protected $fillable = ['panier_id','produit_id','licence_id','quantite','options'];
    protected $casts = ['options'=>'array'];

    public function panier(){ return $this->belongsTo(Panier::class); }
    public function produit(){ return $this->belongsTo(Produit::class); }
    public function licence(){ return $this->belongsTo(MediaLicence::class, 'licence_id'); }
}
