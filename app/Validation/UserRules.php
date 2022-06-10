<?php

namespace App\Validation;

use App\Models\M_User;

class UserRules
{

    public function validateUser(String $str, String $fields, array $data)
    {
        $model = new M_User();
        $user = $model->where('users_nickname', $data['users_nickname'])
            ->first();

        if (!$user)
            return false;

        return password_verify($data['users_password'], $user['users_password']);
    }
}
