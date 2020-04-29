<?php

namespace App\Http\Controllers;

use App\Supplier;
use App\Uf;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    private $msg = [
        'name.required' => 'Preencha este campo para continuar',
        'name.min' => 'Pelo menos 2 caracteres são necessários para o nome',  
        'name.max' => 'No máximo 25 caracteres são permitidos',
        'cnpj.max' => 'Digite somente números nesse campo', 
        'ie.max' => 'Digite somente números nesse campo',
    ];
    
    public function index()
    {
        $suppliers = Supplier::all();
        return view('suppliers.suppliers', compact('suppliers'));
    }

    public function create()
    {
        $ufs = Uf::all();
        return view('suppliers.newSupplier', compact('ufs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:50',
            'cnpj' => 'max:18',
            'ie' => 'max:15'
        ], $this->msg);

        $supplier = Supplier::create([
            'name' => $request->name, 
            'address' => $request->address,
            'address_number' => $request->address_number,
            'neighborhood' => $request->neighborhood,
            'city' => $request->city,
            'uf_id' => $request->uf,
            'cep' => $request->cep,
            'phone1' => $request->phone1,
            'phone2' => $request->phone2,
            'email' => $request->email,
            'cnpj' => $request->cnpj, 
            'company' => $request->company,
            'ie' => $request->ie,
            'obs' => $request->obs,
        ]);

        return redirect('/suppliers');
    }

    public function show($id)
    {
        $supplier = Supplier::find($id);
        $ufs = Uf::all();
        
        return view('suppliers.showSupplier', compact(['supplier', 'ufs']));
    }

    public function edit($id)
    {
        $supplier = Supplier::find($id);
        $ufs = Uf::all();

        return view('suppliers.editSupplier', compact(['supplier', 'ufs']));
    }

    public function update(Request $request, $id)
    {
        $supplier = Supplier::find($id);

        $request->validate([
            'name' => 'required|min:3|max:50',
            'cnpj' => 'max:18',
            'ie' => 'max:15'
        ], $this->msg);

        if (isset($supplier)) {
            $supplier->name = $request->input('name');
            $supplier->address = $request->input('address');
            $supplier->address_number = $request->input('address_number');
            $supplier->neighborhood = $request->input('neighborhood');
            $supplier->city = $request->input('city');
            $supplier->uf_id = $request->input('uf_id');
            $supplier->cep = $request->input('cep');
            $supplier->phone1 = $request->input('phone1');
            $supplier->phone2 = $request->input('phone2');
            $supplier->email = $request->input('email');
            $supplier->cnpj = $request->input('cnpj');
            $supplier->company = $request->input('company');
            $supplier->ie = $request->input('ie');
            $supplier->obs = $request->input('obs');

            $supplier->save();
        }

        return redirect("/suppliers/${id}");
    }

    public function destroy($id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();

        return redirect('/suppliers');
    }
}
