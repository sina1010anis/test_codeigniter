<?php

declare(strict_types=1);

namespace App\Libraries;

use App\Controllers\BaseController;
use App\Models\User;

abstract class Auth extends BaseController
{

    protected $model_user;
    public function __construct()
    {
        $this->model_user = new User();
    }
    public function check() :bool
    {
        return session()->has('user_id');
    }

    public function redicrectHome()
    {

        return redirect()->to('/home');
        
    }

    public function user()
    {

        return $this->model_user->where('id', session()->get('user_id'))->first();

    }

    protected function buildSession($id)
    {
        session()->set('user_id', $id);
    }

    protected function destroySession()
    {
        session()->destroy();
        
        return redirect()->to('/');

    }
}
