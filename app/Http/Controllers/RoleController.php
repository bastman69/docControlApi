<?php

namespace App\Http\Controllers;

use App\Role;

class RoleController extends Controller
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
        return Role::all();
    }


}
