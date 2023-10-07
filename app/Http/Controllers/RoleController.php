<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function Role_list()
    {
        return view('backend.pages.role.list');
    }
    public function Role_Create()
    {
        return view('backend.pages.role.create');
    }
}
