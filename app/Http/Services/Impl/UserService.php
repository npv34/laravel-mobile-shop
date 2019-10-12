<?php


namespace App\Http\Services\Impl;


use App\Http\Repositories\Contracts\UserRepositoryInterface;
use App\Http\Services\UserServiceInterface;

class UserService implements UserServiceInterface
{
    protected $userRepo;
    public function __construct(UserRepositoryInterface $userRepo)
    {
        $this->userRepo = $userRepo;
    }
}
