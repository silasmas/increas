<?php

namespace App\Models;

use App\Models\Abonnement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type_abonnement extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function abonnement()
    {
        return $this->hasMany(Abonnement::class);
    }
}
