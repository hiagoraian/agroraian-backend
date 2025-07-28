<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Services\AuthService;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function login(LoginRequest $request)
    {
        
        $credentials = $request->validated();

        
        $token = $this->authService->login($credentials);

       
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }
}