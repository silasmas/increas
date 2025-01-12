<?php

namespace App\Policies;

use App\Models\Type_abonnement;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TypeAbonnementPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Type_abonnement $typeAbonnement): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Type_abonnement $typeAbonnement): bool
    {
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Type_abonnement $typeAbonnement): bool
    {
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Type_abonnement $typeAbonnement): bool
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Type_abonnement $typeAbonnement): bool
    {
        return true;
    }
}
