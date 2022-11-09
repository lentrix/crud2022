<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index() {
        $accounts = Account::get();

        return view('accounts.index',[
            'accounts' => $accounts
        ]);
    }

    public function create() {
        $users = User::orderBy('name')->pluck('name','id');

        return view('accounts.create',[
            'users' => $users
        ]);
    }

    public function store(Request $request) {
        Account::create([
            'user_id' => $request->user_id,
            'type' => $request->type,
            'balance' => $request->balance,
            'due' => $request->due,
        ]);

        return redirect('/accounts');
    }
}
