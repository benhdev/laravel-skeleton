<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

use Illuminate\Auth\AuthenticationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email:rfc,dns|exists:App\Models\User',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return Response::json([
                'status' => 'success',
                'token' => Auth::user()->api_token
            ]);
        }

        throw new AuthenticationException;
    }

    public function me(Request $request)
    {
        return Response::json(Auth::user());
    }
}
