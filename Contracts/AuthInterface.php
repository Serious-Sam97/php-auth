<?php

namespace App\Contracts;

interface AuthInterface 
{
    public static function login(string $username, string $password): ?string;
    public static function checkToken(string $token): bool;
    public static function logout(): void;
    public static function getCurrentUser(): ?string;

    public function generateNewToken(): string;
}
