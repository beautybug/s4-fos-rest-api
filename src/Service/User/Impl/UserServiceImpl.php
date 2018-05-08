<?php

namespace App\Service\User\Impl;

use App\Service\User\UserService;

class UserServiceImpl implements UserService
{
    public function getUser()
    {
        return [
            'id' => 2,
            'name' => 'tangyue',
            'gender' => 'female',
        ];
    }
}
