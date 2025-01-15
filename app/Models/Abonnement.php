<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonnement extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function type()
    {
        return $this->belongsToMany(Type_abonnement::class);
    }
}
