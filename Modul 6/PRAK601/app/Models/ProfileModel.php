<?php

namespace App\Models;
use CodeIgniter\Model;

class ProfileModel extends Model
{
    protected $table = 'profile';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'nim', 'prodi', 'hobbies', 'skills', 'photo'];

    // Method to get profile data
    public function getProfileData()
    {
        return [
            'name'    => 'Muhammad Firas',
            'nim'     => '2210817110014',
            'prodi'   => 'Teknologi Informasi',
            'hobbies' => 'Memancing',
            'skills'  => 'Debate, English speaking, Biology',
            'photo'   => 'firas.jpeg'
        ];
    }
}
?>