<?php

namespace App\Policies;

use App\Models\SpecialPage;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SpecialPagePolicy
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

    public function update(User $user){

        return $user->is_admin;

    }
}
