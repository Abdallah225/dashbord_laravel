<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashbordController extends Controller
{
    public function index()
    {
        $users_count = User::count();
        return view('/admin/index', compact('users_count'));
    }
}
