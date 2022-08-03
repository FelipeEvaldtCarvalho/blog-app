<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Newsletter;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter){

        request()->validate([
            'email' => 'required'
        ]);
    
        try 
        {
            $newsletter->subscribe(request('email'));
        } catch (\Exception $e) 
        {
            return redirect('/')->with('email', 'Não foi possivel inscrever esse e-mail, por favor tente novamente!');
        }
    
        return redirect('/')->with('success', 'Tudo certo, você receberá as novidades em seu e-mail!');
    }
}