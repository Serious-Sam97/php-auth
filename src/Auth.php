<?php

namespace App;

use App\Contracts\AuthInterface;

class Auth implements AuthInterface
{
    public static function login(string $username, string $password): ?string
    {
        return 'Say' . $username . $password;
    }

    public static function checkToken(string $token): bool
    {
        return true;
    }

    public static function logout(): void
    {
        return;
    }

    public static function getCurrentUser(): ?string
    {
        return 'My Name';
    }

    public function generateNewToken(): string
    {
        $newToken = bin2hex(random_bytes(32));

        $_SESSION['token'] = $newToken;

        return $newToken;
    }
}
