<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{    

    public function validateLogin(Request $request) {
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

    public function index()
    {
        return view('users.users');
    }
    
    public function create()
    {
    }
    
    public function store(Request $request)
    {
    }
    
    public function show(User $user)
    {
    }
    
    public function edit(User $user)
    {
    }
    
    public function update(Request $request, User $user)
    {
    }
    
    public function destroy(User $user)
    {
    }
}
