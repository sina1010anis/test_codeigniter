<?php

use App\Libraries\Auth\Authentication;
use App\Libraries\Token\Token;

function auth() {
    
    return new Authentication();

}

function token() {
    
    return new Token();

}