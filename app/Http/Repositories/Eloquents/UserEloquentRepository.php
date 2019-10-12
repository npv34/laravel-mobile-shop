<?php


namespace App\Http\Repositories\Eloquents;


use App\Http\Repositories\Contracts\UserRepositoryInterface;
use App\User;

class UserEloquentRepository extends EloquentRepository implements UserRepositoryInterface
{

    /**
     * get Model
     * @return string
     */
    public function getModel()
    {
        return User::class;
    }
}
