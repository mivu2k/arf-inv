<?php

namespace App\Policies;

use App\Models\Item;
use App\Models\User;

class ItemPolicy
{
    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Item $item): bool
    {
        return $user->hasRole('admin') || $user->hasRole('manager');
    }

    /**
     * Determine whether the user can bulk delete items.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasRole('admin') || $user->hasRole('manager');
    }
}
