@extends('layouts.app')
@section('title', 'Clientes')
@section('content')
  <div class="page-title-container">
    <div class="page-icon">
      <img src="{{ asset('img/clients.png') }}" alt="-">
    </div>

    <div class="page-text">
      <div class="page-title">Todas os clientes</div>
      <div class="page-description">Visualize todos os clients cadastrados no sistema</div>
    </div>
  </div>

  <div class="page">
    @if (count($clients) > 0) 
    @foreach ($clients as $client)
    <a href="/clients/{{ $client->id }}">
      <div class="hover-area">
        <div class="row"> <!-- name, products -->
          @if ($client->nickname)
          <div class="group grid-size-6">
            <div class="label">Cliente</div>
            <div class="field border-top-primary">{{ $client->name }} ({{ $client->nickname }})</div>
          </div>
          @else
          <div class="group grid-size-6">
            <div class="label">Nome</div>
            <div class="field border-top-primary">{{ $client->name }}</div>
          </div>
          @endif    
          
          <div class="group grid-size-2">
            <div class="label">Total Gasto</div>
            <div class="field border-top-primary">{{ $client->total_spent == 0 ? '--' : $client->total_spent }}</div>
          </div>
          
          <div class="group grid-size-2">
            <div class="label">Saldo Devedor</div>
            <div class="field border-top-primary">{{ $client->balance ?? '--' }}</div>
          </div>
          
        </div>
        
        <div class="row"> <!-- obs -->
          @if ($client->obs)
          <div class="group grid-size-10">
            <div class="label">Observações</div>
            <div class="field border-top-primary">{{ $client->obs }}</div>
          </div>
          @endif
        </div>
        
        <div class="row">
          <a href="#" class="group grid-size-5"></a>
          <a href="/clients/edit/{{ $client->id }}" class="group grid-size-2">
            <div class="field action-area bgc-primary normal-btn">Editar</div>
          </a>
          <a href="/clients/delete/{{ $client->id }}" class="group grid-size-2">
            <div class="field action-area bgc-dark-red normal-btn">Excluir</div>
          </a>

        </div>
      </div>
    </a>

    @endforeach

    @else

    <h3>Não há clientes cadastrados</h3>
    
    @endif

    <div class="button-field">
      <a class="btn btn-primary" href="/clients/new">
        Cadastrar
      </a>
    </div>

  </div>  

@endsection