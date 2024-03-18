<?php

namespace App\Policies;

use App\Models\Internship;
use App\Models\User;
use App\Models\Employee;
use Illuminate\Auth\Access\Response;

class InternshipPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function index(User $user): bool
    {
        return 
            $user->isHR() || 
            $user->isBoss() || 
            $user->isAdmin();
    }

    /**
     * Determine whether the user can view the model.
     */
    public function show(User $user, Internship $internship): bool
    {
        return
            $user->isHR() || 
            $user->isBoss() || 
            $user->isAdmin() || 
            $user->id === $internship->employee->user->id;
    }

    public function edit(User $user, Internship $internship): bool
    {
        if ($user->isHR() || $user->isAdmin()) return true;
        if ($internship->status!=1 || $internship->status!=3) return true;
        return $user->id === $internship->employee->user->id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user, Employee $employee): bool
    {
        return
            $user->isHR() || 
            $user->isBoss() || 
            $user->isAdmin() || 
            $user->id === $employee->user->id;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Internship $internship): bool
    {
        if (!$internship->editable)
            return false;
        return
            $user->id === $internship->employee->user->id || 
            $user->isHR() || 
            $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Internship $internship): bool
    {
        return 
            $user->isHR() || 
            $user->isAdmin();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Internship $internship): bool
    {
        return 
            $user->isHR() || 
            $user->isAdmin();
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Internship $internship): bool
    {
        return 
            $user->isAdmin();
    }
}
