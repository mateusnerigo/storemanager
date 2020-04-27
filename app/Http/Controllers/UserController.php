<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Uf;

class UserController extends Controller
{
    protected $msg = [
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

    public function index()
    {
        $users = User::all();
        return view('users.users', compact('users')) ;
    }

    public function create()
    {
        $ufs = Uf::all();
        
        return view('users.newUser', compact('ufs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:App\User,name',
            'username' => 'required|unique:App\User,username|min:3',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'rg' => 'max:12',
            'cpf' => 'max:14',
            'cep' => 'max:9',
            'is_admin' => 'required'
        ], $this->msg);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email,
            'phone1' => $request->phone1,
            'phone2' => $request->phone2,
            'rg' => $request->rg,
            'cpf' => $request->cpf,
            'obs' => $request->obs,
            'address' => $request->address,
            'address_number' => $request->address_number,
            'neighborhood' => $request->neighborhood,
            'city' => $request->city,
            'uf_id' => $request->uf,
            'cep' => $request->cep,
            'is_admin' => $request->is_admin
        ]);

        return redirect('/users');
    }

    public function show($id)
    {
        $user = User::find($id);
        $ufs = Uf::all();

        return view('users.showUser', compact(['user', 'ufs']));
    }

    public function edit($id)
    {
        $user = User::find($id);
        $ufs = Uf::all();

        return view('users.editUser', compact(['user', 'ufs']));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $request->validate([
            'name' => $request->name == $user->name ? '' : 'required|unique',
            'username' => $request->username == $user->username ? '' : 'required|unique:App\User,username|min:3',
            'password' => $request->password == '' ? '' : 'required',
            'confirm_password' => $request->password == '' ? '' : 'required|same:password',
            'rg' => 'max:12',
            'cpf' => 'max:14',
            'cep' => 'max:9',
            'is_admin' => 'required',
        ], $this->msg);

        if (isset($user)) {
            if ($request->password != '') {
                $user->password = $request->input('password');
            }

            $user->name = $request->input('name') ;
            $user->username = $request->input('username');
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
            $user->save();

            return redirect("/users/${id}");
        }
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/users');
    }
}
