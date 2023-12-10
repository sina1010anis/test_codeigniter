<?php

namespace App\Controllers;

use App\Models\Products;
use CodeIgniter\Controller;

class Task extends Controller 
{
    public function index($id, $id2)
    {
        var_dump($id);
        var_dump($id2);
        // $model = new Products();
        // $tasks = ['item 1', 'item 2', 'item 3'];
        // echo '<pre>';
        // print_r($model->all());
        // echo '</pre>';
        // return view('Task/index', ['tasks' => $tasks]);
    }
}