<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $model = new UserModel();

        // Insert admin data
        $model->insert([
            'username' => 'firas',  
            'email' => 'rohidGanteng@gmail.com',  
            'password' => password_hash('12345678', PASSWORD_DEFAULT),  
        ]);
    }
}
