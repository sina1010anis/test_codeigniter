<?php
namespace App\Models;
use CodeIgniter\Model;

class Remember extends Model
{
    protected $table = "remembers";

    protected $allowedFields = ['rem_token', 'user_id'];

    protected $returnType = 'App\Entities\Task';

    protected $useTimestamps = true;
}