<?php

namespace App\Controllers;

use App\Models\Products;
use CodeIgniter\Controller;
use \Config\Services;

class Task extends Controller 
{
    public function index($price)
    {
        $products = new Products();
        $p = $products->find($price);
        print_r($p);
        // $model = new Products();
        // $tasks = ['item 1', 'item 2', 'item 3'];
        // echo '<pre>';
        // print_r($model->all());
        // echo '</pre>';
        // return view('Task/index', ['tasks' => $tasks]);
    }

    public function pageNew()
    {
        return view('Task/new');
    }

    public function newTask()
    {
        $name = \Config\Services::request()->getVar('name');
        $price = \Config\Services::request()->getVar('price');
        $desc = \Config\Services::request()->getVar('desc');
        $products = new Products();
        $products->insert([
            'name' => $name,
            'price' => $price,
            'desc' => $desc
        ]);
    }

}