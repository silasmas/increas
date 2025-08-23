<?php // app/Models/AchatsLicence.php
namespace App\Models;

use App\Models\User;
use App\Models\CommandeItem;
use App\Models\MediaLicence;
use Illuminate\Database\Eloquent\Model;

class AchatsLicence extends Model
{
    protected $table = 'achats_licences';
    protected $guarded = [];
    protected $casts = ['expires_at'=>'datetime'];

    public function item(){ return $this->belongsTo(CommandeItem::class, 'commande_item_id'); }
    public function acheteur(){ return $this->belongsTo(User::class, 'acheteur_user_id'); }
    public function licence(){ return $this->belongsTo(MediaLicence::class, 'licence_id'); }
}
