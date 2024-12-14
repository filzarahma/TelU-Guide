<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function editProfile ()
    {
        return view ( 'user.userEditProfile' );
    }

    public function viewProfile ()
    {
        return view ( 'user.userViewProfile' );
    }
}
