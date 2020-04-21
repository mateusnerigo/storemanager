<?php

namespace App\Http\Controllers;

use App\User;
use App\Uf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        if (session('current_user')) {
            $users = User::all();
            
            return view('users.users', compact('users')) ;
        }
        
        return redirect ('login');
    }
    
    public function create()
    {
        $ufs = Uf::all();
        return session('current_user') 
            ? view('users.newUser', compact('ufs')) 
            : redirect ('login');
    }
    
    public function store(Request $request)
    {        
        $msg = [
            'name.required' => 'Preencha este campo para continuar',
            'name.unique' => 'Este usuário já está cadastrado',
            'username.required' => 'Preencha este campo para continuar',
            'username.unique' => 'Este nome de usuário já está cadastrado',
            'username.min' => 'O nome de usuário deve ter, pelo menos, 3 caracteres',
            'password.required' => 'Preencha este campo para continuar',
            'confirm_password.required' => 'Preencha este campo para continuar',
            'confirm_password.same' => 'Senhas não são iguais',
            'rg.max' => 'Digite somente números nesse campo',
            'cpf.max' => 'Digite somente números nesse campo',
            'cep.max' => 'Digite somente números nesse campo',
            'is_admin.required' => 'Preencha este campo para continuar',
            'obs.max' => 'Somente 150 caracteres são permitidos nesse campo'
        ];

        $request->validate([
            'name' => 'required|unique:App\User,name',
            'username' => 'required|unique:App\User,username|min:3',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'rg' => 'max:12',
            'cpf' => 'max:14',
            'cep' => 'max:9',
            'is_admin' => 'required',
            'obs' => 'max:150'
        ], $msg);

        $user = new User();

        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->password = $request->input('password');
        $user->email = $request->input('email');
        $user->phone1 = $request->input('phone1');
        $user->phone2 = $request->input('phone2');
        $user->rg = $request->input('rg');
        $user->cpf = $request->input('cpf');
        $user->obs = $request->input('obs');
        $user->address = $request->input('address');
        $user->address_number = $request->input('address_number');
        $user->neighborhood = $request->input('neighborhood');
        $user->city = $request->input('city');
        $user->uf_id = $request->input('uf');
        $user->cep = $request->input('cep');
        $user->is_admin = $request->input('is_admin');
        $user->is_active = 1;
        $user->save();

        return redirect('/users');
    }
    
    public function show(User $user)
    {
        $selected_user = User::find($user)->last();
        $ufs = Uf::all();
        return session('current_user') 
            ? view('users.showUser', compact(['selected_user', 'ufs'])) 
            : redirect ('login');
    }
    
    public function edit(User $user)
    {
        $selected_user = User::find($user)->last();
        $ufs = Uf::all();
        return session('current_user') 
            ? view('users.editUser', compact(['selected_user', 'ufs'])) 
            : redirect ('login');
    }
    
    public function update(Request $request, User $user)
    {
        $selected_user = User::find($user)->last();

        $msg = [
            'name.required' => 'Preencha este campo para continuar',
            'username.required' => 'Preencha este campo para continuar',
            'username.min' => 'O nome de usuário deve ter, pelo menos, 3 caracteres',
            'password.required' => 'Preencha este campo para continuar',
            'confirm_password.required' => 'Preencha este campo para continuar',
            'confirm_password.same' => 'Senhas não são iguais',
            'rg.max' => 'Digite somente números nesse campo',
            'cpf.max' => 'Digite somente números nesse campo',
            'cep.max' => 'Digite somente números nesse campo',
            'is_admin.required' => 'Preencha este campo para continuar',
            'obs.max' => 'Somente 150 caracteres são permitidos nesse campo'
        ];

        $request->validate([
            'name' => 'required',
            'username' => 'required|:App\User,username|min:3',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'rg' => 'max:12',
            'cpf' => 'max:14',
            'cep' => 'max:9',
            'is_admin' => 'required',
            'obs' => 'max:150'
        ], $msg);

        if (isset($selected_user)) {
            $user->name = $request->input('name');
            $user->username = $request->input('username');
            $user->password = $request->input('password');
            $user->email = $request->input('email');
            $user->phone1 = $request->input('phone1');
            $user->phone2 = $request->input('phone2');
            $user->rg = $request->input('rg');
            $user->cpf = $request->input('cpf');
            $user->obs = $request->input('obs');
            $user->address = $request->input('address');
            $user->address_number = $request->input('address_number');
            $user->neighborhood = $request->input('neighborhood');
            $user->city = $request->input('city');
            $user->uf_id = $request->input('uf');
            $user->cep = $request->input('cep');
            $user->is_admin = $request->input('is_admin');
            $user->is_active = 1;
            $user->save();

            return redirect('/users');
        }
    }
    
    public function destroy(User $user)
    {
    }
}
