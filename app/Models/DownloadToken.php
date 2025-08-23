<?php // app/Models/DownloadToken.php
namespace App\Models;

use App\Models\CommandeItem;
use Illuminate\Database\Eloquent\Model;

class DownloadToken extends Model
{
    protected $guarded = [];
    protected $casts = ['expires_at'=>'datetime'];

    public function item(){ return $this->belongsTo(CommandeItem::class, 'commande_item_id'); }
}
