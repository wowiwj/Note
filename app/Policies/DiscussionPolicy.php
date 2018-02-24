<?php

namespace App\Policies;

use App\Models\Discussion;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DiscussionPolicy
{
    public function before($user,$ability){

        return $user->is_admin;
    }

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    public function update(User $user,Discussion $discussion)
    {

        return $user->id == $discussion->user->id;
    }
}
