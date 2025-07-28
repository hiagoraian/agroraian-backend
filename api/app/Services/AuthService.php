<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthService
{ 
    public function login(array $credentials): string
    {
        if (Auth::attempt(['cpf' => $credentials['cpf'], 'password' => $credentials['password']])) {
            $user = Auth::user();
            /** @var \App\Models\User $user */
            return $user->createToken('auth-token')->plainTextToken;

        }

        throw ValidationException::withMessages([
            'cpf' => ['CPF ou senha inválidos.'],
        ]);
    }
}