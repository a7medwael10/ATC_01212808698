<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::select('name','email')->ofUsers()->paginate(8);
        return view('admin.users.index', compact('users'));
    }
}
