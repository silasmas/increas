<?php // app/Models/MediaLicence.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediaLicence extends Model
{
    protected $guarded = [];
    protected $casts = ['commercial'=>'bool','usage_limites'=>'array'];
}
