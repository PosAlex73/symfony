<?php

namespace App\Enums\User;

use App\Enums\Enumable;

class UserTypes
{
    use Enumable;

    public const SIMPLE = 'S';
    public const ADMIN = 'A';
    public const MODERATOR = 'M';
}