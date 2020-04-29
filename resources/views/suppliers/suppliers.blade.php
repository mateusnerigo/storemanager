@extends('layouts.app')
@section('title', 'Fornecedores')
@section('content')
  <div class="page-title-container">
    <div class="page-icon">
      <img src="{{ asset('img/suppliers.png') }}" alt="-">
    </div>

    <div class="page-text">
      <div class="page-title">Todos os fornecedores</div>
      <div class="page-description">Visualize todos os fonecedores cadastrados</div>
    </div>
  </div>

  <div class="page">
    @if (count($suppliers) > 0) 
    @foreach ($suppliers as $supplier)
    <a href="/suppliers/{{ $supplier->id }}">
      <div class="hover-area">
        <div class="row"> <!--  -->
          <div class="group grid-size-5">
            <div class="label">Nome</div> <!-- name -->
            <div class="field border-top-primary">{{ $supplier->name }}</div>
          </div>
          
          <dov class="group grid-size-5">
            <div class="label">Empresa</div>
            <div class="field border-top-primary">{{ $supplier->company ?? '--' }}</div>
          </dov>
        </div>
        
        <div class="row"> <!-- obs -->
          <div class="group grid-size-10">
            <div class="label">Observações</div>
            <div class="field border-top-primary">{{ $supplier->obs ?? '--' }}</div>
          </div>
        </div>
        
        <div class="row">
          <a href="#" class="group grid-size-5"></a>
          <a href="/suppliers/edit/{{ $supplier->id }}" class="group grid-size-2">
            <div class="field action-area bgc-primary normal-btn">Editar</div>
          </a>
          <a href="/suppliers/delete/{{ $supplier->id }}" class="group grid-size-2">
            <div class="field action-area bgc-dark-red normal-btn">Excluir</div>
          </a>

        </div>
      </div>
    </a>

    @endforeach

    @else

    <h3>Não há fornecedores cadastradas</h3>
    
    @endif

    <div class="button-field">
      <a class="btn btn-primary" href="/suppliers/new">
        Cadastrar Fornecedor
      </a>
    </div>

  </div>  

@endsection