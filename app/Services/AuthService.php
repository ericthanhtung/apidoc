<?php

namespace App\Services;

use App\Models\User;
use Filament\Facades\Filament;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AuthService
{
    public function authenticate($token)
    {
        try {
            $key = file_get_contents(storage_path('oauth-public.key'));
            $decoded = JWT::decode($token, new Key($key, 'RS256'));
            $user = User::where(['Email' => $decoded->user->email])->first();
            if (!empty($user)) {
                auth()->login($user);
                return true;
            }
            return false;
        } catch (\Exception $e) {
            return false;
        }

    }
}
