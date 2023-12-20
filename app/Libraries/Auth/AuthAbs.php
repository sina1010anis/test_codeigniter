<?php

declare(strict_types=1);

namespace App\Libraries\Auth;

use App\Controllers\BaseController;
use App\Models\Remember as RememberModel;
use App\Models\User;
use CodeIgniter\Cookie\Cookie;
use Config\Services;

helper('cookie');

abstract class AuthAbs extends BaseController
{

    use Remember;
    private $token;
    protected $model_user;
    protected $model_rem;

    private $token_remember;

    public function __construct()
    {
        $this->model_user = new User();
        $this->model_rem = new RememberModel();
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

        return $this;
    }

    protected function destroySession()
    {
        session()->destroy();
        
        return redirect()->to('/');

    }

    public function redirectRestPassword()
    {
        return view('Auth/RestPassword');
    }

    protected function buildTokenForRestPassword() :self
    {
        $this->token = rand(1000000, 9999999);

        return $this;
    }

    public function getToken()
    {
        return $this->token;
    }


}
