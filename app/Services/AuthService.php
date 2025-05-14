<?php

namespace App\Services;

use App\Interfaces\AuthRepositoryInterface;
use App\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
class AuthService
{

    protected $authRepository;

    public function __construct(AuthRepositoryInterface $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function createUser(array $data)
    {
       unset($data['password_confirmation']);
        $data['password'] = Hash::make($data['password']);


        return $this->authRepository->store($data);
    }
    

}
