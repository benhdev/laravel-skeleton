<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

use Illuminate\Auth\AuthenticationException;

class AuthController extends Controller
{
    /**
     * @method login()
     * @example @uses php artisan make:guard --example
     *
     * @param Illuminate\Http\Request
     *
     * @return Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email:rfc,dns|exists:App\Models\User',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if ($plainTextToken = Auth::attempt($credentials)) {
            return Response::json([
                'status' => 'success',
                'token' => $plainTextToken // OR Auth::token()
            ]);
        }

        throw new AuthenticationException;
    }

    public function me(Request $request)
    {
        return Response::json(Auth::user());
    }
}
