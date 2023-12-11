<?php

namespace App\Controllers;

use App\Models\Products;
use CodeIgniter\Controller;
use \Config\Services;

class Task extends Controller 
{
    public function index($id)
    {
        $products = new Products();
        $p = $products->find($id);
        // $model = new Products();
        // $tasks = ['item 1', 'item 2', 'item 3'];
        // echo '<pre>';
        // print_r($model->all());
        // echo '</pre>';
        return view('Task/index', ['tasks' => $p]);
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
        $res = $products->insert([
            'name' => $name,
            'price' => $price,
            'desc' => $desc
        ]);

        if ($res == false) {
            return redirect()->back()->with('error', $products->errors());
        } else {
            return redirect()->back()->with('ok', 'ok');
        }
    }

    public function editTask($id)
    {
        $products = new Products();
        $p = $products->find($id);
        return view('task/edit', ['tasks' => $p]);
    }

    public function editTaskPost($id)
    {
        $name = \Config\Services::request()->getVar('name');
        $price = \Config\Services::request()->getVar('price');
        $desc = \Config\Services::request()->getVar('desc');
        $products = new Products();
        $res = $products->update($id, [
            'name' => $name,
            'price' => $price,
            'desc' => $desc
        ]);

        if ($res == false) {
            return redirect()->back()->with('error', $products->errors());
        } else {
            return redirect()->back()->with('ok', 'ok');
        }
    }

}