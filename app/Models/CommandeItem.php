<?php // app/Models/CommandeItem.php
namespace App\Models;

use App\Models\Produit;
use App\Models\Commande;
use App\Models\MediaLicence;
use App\Models\AchatsLicence;
use App\Models\DownloadToken;
use Illuminate\Database\Eloquent\Model;

class CommandeItem extends Model
{
    protected $guarded = [];

    public function commande(){ return $this->belongsTo(Commande::class); }
    public function produit(){ return $this->belongsTo(Produit::class); }
    public function licence(){ return $this->belongsTo(MediaLicence::class, 'licence_id'); }
    public function achatLicence(){ return $this->hasOne(AchatsLicence::class, 'commande_item_id'); }
    public function downloadTokens(){ return $this->hasMany(DownloadToken::class); }
}
