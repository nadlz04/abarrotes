<?php

namespace App\Policies;

use App\Models\Provider;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProviderPolicy
{
    use HandlesAuthorization;


    public function viewAny(User $user)
    {
        //
    }


    public function view(User $user, Provider $provider)
    {
        //
    }


    public function create(User $user)
    {
        //
    }


    public function update(User $user, Provider $provider)
    {
        //
    }


    public function delete(User $user, Provider $provider)
    {
        //
    }


    public function restore(User $user, Provider $provider)
    {
        //
    }


    public function forceDelete(User $user, Provider $provider)
    {
        //
    }
}
