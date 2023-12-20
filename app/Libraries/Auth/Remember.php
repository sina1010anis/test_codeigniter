<?php

declare(strict_types=1);

namespace App\Libraries\Auth;

trait Remember
{
    private const COOKIE_REM_NAME = 'remember_my_token_user';

    
    public function createTokenForRemember($user_id)
    {
        
        $this->token_remember = token()->createToken();

        setcookie(self::COOKIE_REM_NAME, $this->token_remember, time() + 7200);

        $this->model_rem->insert([

            'rem_token' => $this->token_remember,

            'user_id' => $user_id,

        ]);

    }

    public function deleteTokenForRemember()
    {
        
        return service('response')->deleteCookie(self::COOKIE_REM_NAME);

    }

    public function getTokenRemember()
    {

        return $this->token_remember;

    }

    public function getTokenCookie()
    {

        if ($this->hasCoockieToken()) {

            return $_COOKIE[self::COOKIE_REM_NAME];
            
        }
        
    }

    public function hasCoockieToken() :bool
    {

        return (bool) isset($_COOKIE[self::COOKIE_REM_NAME]);

    }

    public function getKeyCookie()
    {
        return self::COOKIE_REM_NAME;
    }
}
