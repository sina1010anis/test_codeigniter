<?php

namespace App\Libraries;

use Config\Services;
use \App\Entities\Task;
use App\Libraries\Email\BuilderMail;
use App\Libraries\Email\Mail;

class Authrization extends Auth
{
    public function login()
    {

        $password = $this->model_user->setPassword(request()->getVar('password'));
        
        $get_user = $this->model_user->getUserForEmailAndPassword(email: request()->getVar('email'), password: $password);
        
        if (isset($get_user)) {

            $this->buildSession($get_user->id);

            return $this->redicrectHome();
            
        } else {

            return redirect()->back()->with('error', ['Not find User'])->withInput();

        }
        
    }

    public function regsiter($data)
    {
        
        $e = new Task($data);

        if ($this->model_user->insert($e)) {

            $password = $this->model_user->setPassword($e->password);

            $get_user = $this->model_user->getUserForEmailAndPassword($e->email, $password);

            $this->buildSession($get_user->id);

            return $this->redicrectHome();

        } else {

            return redirect()->back()->with('error', $this->model_user->errors());

        }  
    }

    public function logout()
    {
        return $this->destroySession();
    }

    public function restPassword($email)
    {
        
        if ($email != null) {

            $this->buildTokenForRestPassword();
            
            $user = $this->model_user->getUserForEmail($email);

            $this->model_user->update($user->id, [

                'token_password' => $this->getToken(),

                'token_exp' => time() + 300,

            ]);

            $email = new BuilderMail(new Mail(), request()->getVar('email'), 'Rest Password', 'Ok => '.$this->getToken());

            return $email->builder();

        }
    }
}
