<?php
namespace App\Interfaces;

use App\Models\User;

interface AuthRepositoryInterface
{

    public function store(array $data): User;
   
}
