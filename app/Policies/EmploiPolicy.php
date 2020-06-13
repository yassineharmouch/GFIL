<?php

namespace App\Policies;

use App\User;
use App\Emploi;
use Illuminate\Auth\Access\HandlesAuthorization;

class EmploiPolicy
{
    use HandlesAuthorization;
    
    public function before($user,$ability){
        
        if($user->role_id==3 && $ability!='delete' && $ability!='update'   ){
            return true;
        }
    }
    
    /**
     * Determine whether the user can view any emplois.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the emploi.
     *
     * @param  \App\User  $user
     * @param  \App\Emploi  $emploi
     * @return mixed
     */
    public function view(User $user, Emploi $emploi)
    {
        //
    }

    /**
     * Determine whether the user can create emplois.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the emploi.
     *
     * @param  \App\User  $user
     * @param  \App\Emploi  $emploi
     * @return mixed
     */
    public function update(User $user, Emploi $emploi)
    {
        return $user->id === $emploi->user_id;
    }

    /**
     * Determine whether the user can delete the emploi.
     *
     * @param  \App\User  $user
     * @param  \App\Emploi  $emploi
     * @return mixed
     */
    public function delete(User $user, Emploi $emploi)
    {
        return $user->id === $emploi->user_id;
    }

    /**
     * Determine whether the user can restore the emploi.
     *
     * @param  \App\User  $user
     * @param  \App\Emploi  $emploi
     * @return mixed
     */
    public function restore(User $user, Emploi $emploi)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the emploi.
     *
     * @param  \App\User  $user
     * @param  \App\Emploi  $emploi
     * @return mixed
     */
    public function forceDelete(User $user, Emploi $emploi)
    {
        //
    }
}
