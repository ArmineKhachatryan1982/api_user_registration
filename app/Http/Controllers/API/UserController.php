<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Api\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use App\Services\AuthService;

use PHPOpenSourceSaver\JWTAuth\Contracts\Providers\Auth as ProvidersAuth;

class UserController extends BaseController
{
    

    public function __invoke(Request $request)
    {

        return auth()->user() ? $this->sendResponse(new UserResource(auth()->user()),"Auth user profile"): $this->sendError('User not found');
    }
}
