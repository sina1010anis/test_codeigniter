<?php

declare(strict_types=1);

namespace App\Models;
use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'users';

    protected $useTimestamps = true;

    protected $allowedFields = ['name', 'email', 'password'];

    protected $returnType = 'App\Entities\Task';

    protected $validationRules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
    ];

    protected $beforeInsert = ['setPassword'];

    protected function setPassword(array $data)
    {
        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        return $data;
    }
}
