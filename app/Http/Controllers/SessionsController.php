<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $user = request()->validate([
            'email' => 'required | email',
            'password' => 'required'
        ]);

        if (auth()->attempt($user)){
            session()->regenerate();
            return redirect('/')->with('success', 'Você esta logado!');
        }

        throw ValidationException::withMessages([
            'email' => 'E-mail incorreto ou inexistente, verifique e tente novamente.',

        ]);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Até mais!');
    }
}
