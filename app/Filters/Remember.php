<?php

namespace App\Filters;

use App\Models\Remember as ModelsRemember;
use App\Models\User;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
helper('auth');
class Remember implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if ( ! auth()->check() and auth()->hasCoockieToken()) {
                
            $model_user = new User();

            $model_remember = new ModelsRemember();

            $get_data_remember = $model_remember->where('rem_token', auth()->getTokenCookie())->first();

            $get_data_user = $model_user->find($get_data_remember->user_id);

            auth()->loginOnlyEmail($get_data_user->email);

        }

    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
