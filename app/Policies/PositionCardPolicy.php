<?php

namespace App\Policies;

use App\Models\PositionCard;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PositionCardPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function show(User $user, PositionCard $positioncard): bool
    {
        return
            $user->isHR() || 
            $user->isBoss() || 
            $user->isAdmin() || 
            $user->id === $positioncard->employee->user->id;
    }

    public function showInternships(User $user, PositionCard $positioncard): bool
    {
        return
            $user->isHR() || 
            $user->isBoss() || 
            $user->isAdmin() || 
            $user->id === $positioncard->employee->user->id;
    }
    public function createInternship(User $user, PositionCard $positioncard): bool
    {
        return
            $user->isHR() || 
            $user->isBoss() || 
            $user->isAdmin() || 
            $user->id === $positioncard->employee->user->id;
    }
    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        dd('333');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, PositionCard $positioncard): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, PositionCard $positioncard): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, PositionCard $positioncard): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, PositionCard $positioncard): bool
    {
        //
    }
}
