<?php

namespace App\Controllers;
use App\Libraries\Email\BuilderMail;
use App\Libraries\Email\Mail;
use App\Models\User;



class Auth extends BaseController
{
    public function registerPage()
    {

        if (auth()->check()) {

            return auth()->redicrectHome();
            
        }
        
        return view('Auth/Register');
  
    }

    public function loginPage()
    {

        if (auth()->check()) {

            return auth()->redicrectHome();
            
        }
        
        return view('Auth/Login');
  
    }
    
    public function registerMethod()
    {

        if ( ! auth()->check()) {

            return auth()->regsiter(request()->getVar());

        }

        return auth()->redicrectHome();

    }

    public function loginMethod()
    {

        if ( ! auth()->check()) {

            return auth()->login();

        }

        return auth()->redicrectHome();

    }

    public function logoutMethod()
    {

        return auth()->logout();
        
    }

    public function home()
    {
        
        if (session()->has('user_id')) {

            return view('Task/user');

        }

        return redirect()->to('/login'); 

    }

    public function restPasswordPage()
    {

        if (auth()->check()) {

            return auth()->redicrectHome(); 
            
        } 
        
        return auth()->redirectRestPassword();

    }

    public function restPasswordMethod()
    {

        return auth()->restPassword(request()->getVar('email'));

    }

    public function restPasswordCheck($token)
    {
        $user_model = new User();
        
        $data = $user_model->where('token_password', $token)->first();

        if ($data != null) {

            return view('Auth/RestPasswordEdit', ['token' => $token]);

        }

        dd('ON');
    }

    public function restPasswordEdit($token)
    {
        
        $user_model = new User();

        $user = $user_model->where('token_password', $token)->first();

        $user_model->update($user->id ,[

            'password' => $user_model->setPassword(request()->getVar('password'))

        ]);

        return redirect()->to('/login')->with('ok', 'ok');
    }

}
