<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function index() 
    {
        session(['current_user' => '']);
        return view('login');
    }

    public function validateLogin(Request $request) 
    {
        session(['current_user' => '']);

        $msg = [
            'username.required' => 'Por favor, insira o nome do usuário',
            'password.required' => 'Por favor, insira a senha',
        ];

        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ], $msg);

        if (isset($request)){
            $user = User::all()
                ->where('username', $request->username)
                ->first();
            if ($user) {
                if($request->password === $user->password) {
                    session(['current_user' => $user]);

                    return view('layouts.app');
                } 
            }    
        }
        return view('login', ['wrong_credentials' => 'Dados incorretos']);
    }
}
