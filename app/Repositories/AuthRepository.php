<?php

namespace App\Repositories;

use App\Interfaces\AuthRepositoryInterface;

use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\DB;

class AuthRepository implements AuthRepositoryInterface
{

    public function store(array $data): User
    {


        try {
            DB::beginTransaction();

            $user = User::create($data);

            DB::commit(); // Commit the transaction if everything goes well

            return $user;

        } catch (\Exception $e) {
            DB::rollBack(); // Revert all changes if an error occurs
            // dd($e->getMessage()); // Debug the exception
            throw $e;
        }

    }

}

