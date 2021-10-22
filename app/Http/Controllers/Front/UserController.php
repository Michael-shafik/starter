<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{

    public function showUserName(){

        return 'Michael shafik';
    }


    public function getIndex(){

       /* $obj = new \stdClass();

        $obj -> name = 'michael';
        $obj -> id = 5;
        $obj -> gender = 'male';*/

       $data=[];

        return view('welcome',compact('data')) ;
    }
}
