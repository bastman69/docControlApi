<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{


    function __construct()
    {
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function all()
    {
        return User::all();
    }


}
