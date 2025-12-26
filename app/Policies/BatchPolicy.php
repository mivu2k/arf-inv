<?php

namespace App\Policies;

use App\Models\Batch;
use App\Models\User;

class BatchPolicy
{
    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Batch $batch): bool
    {
        return $user->hasRole('admin');
    }
}
