<?php

namespace App\Policies;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class EmployeePolicy
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
    public function show(User $user, Employee $employee): bool
    {
        return
            $user->isHR() || 
            $user->isBoss() || 
            $user->isAdmin() || 
            $user->id === $employee->user->id;
    }

    /**
     * Determine whether the user can edit the model.
     */
    public function edit(User $user, Employee $employee): bool
    {
        if (!$employee->editable)
            return false;
        return
            $user->id === $employee->user->id || 
            $user->isHR() || 
            $user->isAdmin();
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return 
            $user->isHR() || 
            $user->isAdmin();
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Employee $employee): bool
    {
        if (!$employee->editable)
            return false;
        return
            $user->id === $employee->user->id || 
            $user->isHR() || 
            $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Employee $employee): bool
    {
        return 
            $user->isHR() || 
            $user->isAdmin();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Employee $employee): bool
    {
        return 
            $user->isHR() || 
            $user->isAdmin();
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Employee $employee): bool
    {
        return 
            $user->isAdmin();
    }
}
