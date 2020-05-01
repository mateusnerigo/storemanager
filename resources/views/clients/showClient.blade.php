@extends('layouts.app')
@section('title', "Visualizar Cliente - $client->name")
@section('content')
  <div class="page-title-container">
    <div class="page-icon">
      <img src="{{ asset('img/clients.png') }}" alt="-">
    </div>

    <div class="page-text">
      <div class="page-title">
        {{ $client->name }}
        
        <span>
          {{ $client->nickname ?? '' }}
        </span>
      </div>
      <div class="page-description">
        Cadastrado por <strong>{{ $user->name }}</strong>
      </div>
    </div>
  </div>

  <div class="show-container">
    <div class="page">

      <div class="row">
        <div class="group grid-size-3"> <!-- created_at -->
          <div class="label">Cliente desde</div>
          <div class="field border-top-primary">{{ $client->created_at }}</div>
        </div>
  
        <div class="group grid-size-3"> <!-- updated+at -->
          <div class="label">Atualizado em</div>
          <div class="field border-top-primary">{{ $client->updated_at }}</div>
        </div>

        <div class="group grid-size-2">
          <div class="label">Total Gasto</div>
          <div class="field border-top-primary">{{ $client->total_spent == 0 ? '--' : $client->total_spent }}</div>
        </div>
        
        <div class="group grid-size-2">
          <div class="label">Saldo Devedor</div>
          <div class="field border-top-primary">{{ $client->balance ?? '--' }}</div>
        </div>
      </div>

      <div class="row">
        <div class="group grid-size-6"></div> <!-- it pushes rg and cpf field to the right-->

        <div class="group grid-size-2"> <!-- rg input -->
          <div class="label">R. G.</div>
          <div class="field border-top-primary">{{ $client->rg ?? '--' }}</div>
        </div>
  
        <div class="group grid-size-2"> <!-- cpf input -->
          <div class="label">C. P. F.</div>
          <div class="field border-top-primary">{{ $client->cpf ?? '--' }}</div>
        </div>
      </div>

      <div class="row">  
        <div class="group grid-size-3"> <!-- phone1 input -->
          <div class="label">Telefone 1</div>
          <div class="field border-top-primary">{{ $client->phone1 ?? '--' }}</div>
        </div>
  
        <div class="group grid-size-3"> <!-- phone2 input -->
          <div class="label">Telefone 2</div>
          <div class="field border-top-primary">{{ $client->phone2 ?? '--' }}</div>
        </div>

        <div class="group grid-size-4"> <!-- email input -->
          <div class="label">Email</div>
          <div class="field border-top-primary">{{ $client->email ?? '--' }}</div>
        </div>
      </div>      

      <div class="row">
        <div class="group grid-size-6"> <!-- address -->
          <div class="label">Endereço</div>
          <div class="field border-top-primary">{{ $client->address ?? '--' }}</div>
        </div>
  
        <div class="group grid-size-"> <!-- address_number -->
          <div class="label">Nº </div>
          <div class="field border-top-primary">{{ $client->address_number ?? '--' }}</div>
        </div>
  
        <div class="group grid-size-3"> <!-- neighborhood -->
          <div class="label">Bairro</div>
          <div class="field border-top-primary">{{ $client->neighborhood ?? '--' }}</div>
        </div>
      </div>
  
      <div class="row">
        <div class="group grid-size-4"> <!-- city -->
          <div class="label">Cidade</div>
          <div class="field border-top-primary">{{ $client->city ?? '--'}}</div>
        </div>
  
        <div class="group grid-size-2"> <!-- cep -->
          <div class="label">CEP</div>
          <div class="field border-top-primary">{{ $client->cep ?? '--' }}</div>
        </div>

        <div class="group grid-size-4"> <!-- uf -->
          <div class="label">Estado</div>
          <div class="field border-top-primary">{{ $ufs[$client->uf_id -1]->name ?? '--' }}</div>
        </div>        
      </div>

     

      @if ($client->obs)
      <div class="row"> <!-- obs -->
        <div class="group grid-size-10">
          <div class="label">Observações</div>
          <div class="field border-top-primary">{{ $client->obs}}</div>
        </div>
      </div>   
      @endif
    </div>
    
    <div class="button-field">
      <a class="btn btn-neutral" href="/clients">Voltar</a>
      <a class="btn btn-danger" href="/clients/delete/{{ $client->id }}">Excluir</a>
      <a class="btn btn-primary" href="/clients/edit/{{ $client->id }}">Editar</a>
    </div>
  </div>


@endsection