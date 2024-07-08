<?php

namespace App\Enums;

enum UserType: int
{
    case Admin = 10;
    case Player = 20;

    public static function usernameLength(UserType $type)
    {
        return match ($type) {
            self::Admin => 1,
            self::Player => 2,
        };
    }

    public static function childUserType(UserType $type)
    {
        return match ($type) {
            self::Admin => self::Player,
            self::Player => self::Player
        };
    }
}
