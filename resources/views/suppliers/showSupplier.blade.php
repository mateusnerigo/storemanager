@extends('layouts.app')
@section('title', "Visuaizar Usuário - $supplier->name")
@section('content')
@if ($supplier)
  <div class="page-title-container">
    <div class="page-icon">
      <img src="{{asset('img/suppliers.png')}}" alt="-">
    </div>

    <div class="page-text">
      <div class="page-title">
        {{ $supplier->name ?? '--' }}
      </div>

      <div class="page-description">
        <span>
          <span>Empresa: </span>
          
          <strong>
            {{ $supplier->company ?? '--' }}
          </strong>
        </span>
      </div>
    </div>
  </div>
   
  <div class="show-container">
    <div class="page">
      <div class="row">
  
        <div class="group grid-size-4"> <!-- email input -->
          <div class="label">Email</div>
          <div class="field border-top-primary">{{ $supplier->email ?? '--' }}</div>
        </div>
  
        <div class="group grid-size-3"> <!-- phone1 input -->
          <div class="label">Telefone 1</div>
          <div class="field border-top-primary">{{ $supplier->phone1 ?? '--' }}</div>
        </div>
  
        <div class="group grid-size-3"> <!-- phone2 input -->
          <div class="label">Telefone 2</div>
          <div class="field border-top-primary">{{ $supplier->phone2 ?? '--' }}</div>
        </div>
      </div>      
        
      <div class="row">
        <div class="group grid-size-6"></div> <!-- it pushes rg and cpf field to the right-->

        <div class="group grid-size-2"> <!-- rg input -->
          <div class="label">CNPJ/CPF</div>
          <div class="field border-top-primary">{{ $supplier->CNPJ ?? '--' }}</div>
        </div>
  
        <div class="group grid-size-2"> <!-- cpf input -->
          <div class="label">I. E.</div>
          <div class="field border-top-primary">{{ $supplier->id ?? '--' }}</div>
        </div>
      </div>

      <div class="row">
        <div class="group grid-size-6"> <!-- address -->
          <div class="label">Endereço</div>
          <div class="field border-top-primary">{{ $supplier->address ?? '--' }}</div>
        </div>
  
        <div class="group grid-size-"> <!-- address_number -->
          <div class="label">Nº </div>
          <div class="field border-top-primary">{{ $supplier->address_number ?? '--' }}</div>
        </div>
  
        <div class="group grid-size-3"> <!-- neighborhood -->
          <div class="label">Bairro</div>
          <div class="field border-top-primary">{{ $supplier->neighborhood ?? '--' }}</div>
        </div>
      </div>
  
      <div class="row">
        <div class="group grid-size-4"> <!-- city -->
          <div class="label">Cidade</div>
          <div class="field border-top-primary">{{ $supplier->city ?? '--'}}</div>
        </div>
  
        <div class="group grid-size-2"> <!-- cep -->
          <div class="label">CEP</div>
          <div class="field border-top-primary">{{ $supplier->cep ?? '--' }}</div>
        </div>

        <div class="group grid-size-4"> <!-- uf -->
          <div class="label">Estado</div>
          <div class="field border-top-primary">{{ $ufs[$supplier->uf_id -1]->name ?? '--' }}</div>
        </div>        
      </div>

      @if ($supplier->obs)
      <div class="row"> <!-- obs -->
        <div class="group grid-size-10">
          <div class="label">Observações</div>
          <div class="field border-top-primary">{{ $supplier->obs}}</div>
        </div>
      </div>   
      @endif

      <div class="row">
        <div class="group grid-size-4"></div>
  
        <div class="group grid-size-3"> <!-- created_at -->
          <div class="label">Cadastrado em</div>
          <div class="field border-top-primary">{{ $supplier->created_at ?? '--' }}</div>
        </div>
  
        <div class="group grid-size-3"> <!-- updated+at -->
          <div class="label">Atualizado em</div>
          <div class="field border-top-primary">{{ $supplier->updated_at ?? '--' }}</div>
        </div>
      </div>
    </div>
    
    <div class="button-field">
      <a class="btn btn-neutral" href="/suppliers">Voltar</a>
      <a class="btn btn-danger" href="/suppliers/delete/{{ $supplier->id }}">Excluir</a>
      <a class="btn btn-primary" href="/suppliers/edit/{{ $supplier->id }}">Editar</a>
    </div>
  </div>
@endif

@endsection