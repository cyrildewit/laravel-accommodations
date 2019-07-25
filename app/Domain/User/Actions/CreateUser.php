<?php

namespace Domain\User\Actions;

use Domain\User\Models\User;
use Domain\User\Exceptions\EmailNotUniqueException;

class CreateUser
{
    public function __construct()
    {
        //
    }

    public function execute(array $data) : User
    {
        $email = $data['email'];

        if (User::whereEmail($email)->exists()) {
            throw new EmailNotUniqueException($email.' should be unique.');
        }

        $user = new User();
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->save();

        return $user;
    }
}
