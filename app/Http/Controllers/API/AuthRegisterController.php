<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRegisterRequest;
use App\Services\AuthService;
use Illuminate\Http\Request;

class AuthRegisterController extends BaseController
{
    public function __construct(protected AuthService $service){}

    public function __invoke(AuthRegisterRequest $request)
    {

        $user = $this->service->createUser($request->all());


       return $this->sendResponse( $user,'User created successfully');
    }
}
