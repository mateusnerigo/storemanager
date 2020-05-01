<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\User;
use App\Uf;

class ClientController extends Controller
{
    protected $msg = [ 
        'name.required' => 'Preencha este campo para continuar',
        'name.min' => 'Este campo deve ter, pelo menos, 2 caracteres',
        'name.max' => 'Este campo deve ter, no máximo, 50 caracteres',
        'rg.max' => 'Digite somente números nesse campo',
        'cpf.max' => 'Digite somente números nesse campo',
        'cep.max' => 'Digite somente números nesse campo',
        'vip.required' => 'Preencha este campo para continuar',
        'obs.max' => 'Somente 150 caracteres são permitidos nesse campo'
    ];

    public function index()
    {
        $clients = Client::all();
        return view('clients.clients', compact('clients'));
    }

    public function create()
    {
        $ufs = Uf::all();
        return view('clients.newClient', compact('ufs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:50',
            'rg' => 'max:12',
            'cpf' => 'max:14',
            'cep' => 'max:9',
            'vip' => 'required'
        ]);

        Client::create([
            'name' => $request->name,
            'nickname' => $request->nickname,
            'phone1' => $request->phone1,
            'phone2' => $request->phone2,
            'email' => $request->email,
            'vip' => $request->vip,
            'rg' => $request->rg,
            'cpf' => $request->cpf,
            'obs' => $request->obs,
            'total_spent' => 0,
            'address' => $request->address,
            'address_number' => $request->address_number,
            'neighborhood' => $request->neighborhood,
            'city' => $request->city,
            'uf_id' => $request->uf_id,
            'cep' => $request->cep,
            'user_id' => session('current_user')->id
        ]);

        return redirect('/clients');
    }

    public function show($id)
    {  
        $client = Client::find($id);
        $user = User::find($client->user_id);
        $uf = Uf::find($client->uf_id);

        return view('clients.showClient', compact(['client', 'user', 'uf']));
    }

    public function edit($id)
    {
        $client = Client::find($id);
        $ufs = Uf::all();

        return view('clients.editClient', compact(['client', 'ufs']));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:2|max:50',
            'rg' => 'max:12',
            'cpf' => 'max:14',
            'cep' => 'max:9',
            'vip' => 'required'
        ]);

        $client = Client::find($id);

        if (isset($client)) {
            $client->name = $request->name;
            $client->nickname = $request->nickname;
            $client->phone1 = $request->phone1;
            $client->phone2 = $request->phone2;
            $client->email = $request->email;
            $client->vip = $request->vip;
            $client->rg = $request->rg;
            $client->cpf = $request->cpf;
            $client->obs = $request->obs;
            $client->address = $request->address;
            $client->address_number = $request->address_number;
            $client->neighborhood = $request->neighborhood;
            $client->city = $request->city;
            $client->uf_id = $request->uf_id;
            $client->cep = $request->cep;

            $client->save();
        }

        return redirect("/clients/${id}");
    }

    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();

        return redirect('/clients');
    }
}
