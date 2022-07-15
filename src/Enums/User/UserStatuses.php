<?php

namespace App\Enums\User;

use App\Enums\Enumable;

class UserStatuses
{
    use Enumable;

    public const ACTIVE = 'A';
    public const BANNED = 'D';
}