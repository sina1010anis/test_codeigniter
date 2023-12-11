<?php
namespace App\Models;
use CodeIgniter\Model;

class Products extends Model
{
    protected $table = "products";

    protected $allowedFields = ['name', 'price', 'desc'];
}