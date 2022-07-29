<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }

    public function store(){
        $user = request()->validate([
            'username' => 'required | max:255 | unique:users,username',
            'name' => 'required | max:255 | min:3',
            'email' => 'required | email | max:255 | unique:users,email',
            'password' => ['required', 'max:255',  'min:7']
        ]);

        User::create($user);

        return redirect('/')->with('success', 'Conta criada com sucesso!');
    }
}
