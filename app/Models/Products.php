<?php
namespace App\Models;
use CodeIgniter\Model;

class Products extends Model
{
    protected $table = "products";

    protected $allowedFields = ['name', 'price', 'desc', 'user_id'];

    protected $returnType = 'App\Entities\Task';

    protected $useTimestamps = true;
    protected $validationRules = [
        'name' => 'required',
        'price' => 'required',
        'desc' => 'required',
    ];

    protected $validationMessages = [
        'name' => [
            'required' => 'لصفا نام را وارد کنید'
        ], 'price' => [
            'required' => 'لصفا قیمت را وارد کنید'
        ], 'desc' => [
            'required' => 'لصفا توضیحات را وارد کنید'
        ]
    ];
}