<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';

    // Now includes email 👇🏼
    protected $allowedFields = ['username', 'email', 'password'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';

    protected $validationRules = [
        'username' => 'required|is_unique[users.username]',
        'email'    => 'required|valid_email|is_unique[users.email]',
        'password' => 'required|min_length[8]'
    ];

    protected $validationMessages = [
        'username' => [
            'is_unique' => 'Sorry, that username is already taken. Please choose another.'
        ],
        'email' => [
            'is_unique' => 'That email is already registered.',
            'valid_email' => 'Please provide a valid email address.'
        ]
    ];

    protected $skipValidation = false;
    protected $beforeInsert = ['hashPassword'];

    protected function hashPassword(array $data)
    {
        if (! isset($data['data']['password'])) {
            return $data;
        }

        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        return $data;
    }
}
