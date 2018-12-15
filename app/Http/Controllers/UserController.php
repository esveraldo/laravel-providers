<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function getUser()
    {
//        $user = User::find(1);
//        
//        return $user->cliente;
        
        return app('user')->cliente;
    }
}
