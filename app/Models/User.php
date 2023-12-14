<?php

declare(strict_types=1);

namespace App\Models;

use App\Entities\Task;
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

    public function setPassword(array|string $data) : array|string
    {
        if (is_array($data)) {

            $data['data']['password'] = md5($data['data']['password']);

        } else if (is_string($data)) {

            $data = md5($data);

        }
        
        return $data;
    }

    public function getUserForEmailAndPassword($email, $password) :Task|null
    {
        return $this->where(['email' => $email, 'password' => $password])->first();
    }
}
