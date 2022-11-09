<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::orderBy('name')->get();

        return view('users.index', [
            'users' => $users
        ]);
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
       User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password)
       ]);

       return redirect('/users');
    }
}
