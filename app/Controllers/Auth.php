<?php

namespace App\Controllers;

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

}
