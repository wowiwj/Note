<?php

namespace App\Policies;

use App\Models\Draft;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DraftPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function before($user,$ability){

        return $user->is_admin;
    }

    public function update(User $user,Draft $draft)
    {
        return $user->id == $draft->user->id;
    }
}
