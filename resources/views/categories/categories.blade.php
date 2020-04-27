@extends('layouts.app')
@section('title', 'Categorias')
@section('content')
  <div class="page-title-container">
    <div class="page-icon">
      <img src="{{ asset('img/categories.png') }}" alt="-">
    </div>

    <div class="page-text">
      <div class="page-title">Todas as categorias</div>
      <div class="page-description">Visualize todas as categorias cadastradas no sistema</div>
    </div>
  </div>

  <div class="page">
    @if (count($categories) > 0) 
    @foreach ($categories as $category)
    <a href="/categories/{{ $category->id }}">
      <div class="hover-area">
        <div class="row"> <!-- name, products -->
          <div class="group grid-size-6">
            <div class="label">Nome da Categoria</div>
            <div class="field border-top-primary">{{ $category->name }}</div>
          </div>
          
          <div class="group grid-size-4">
            <div class="label">Produtos Cadastrados</div>
            <div class="field border-top-primary">????</div>
          </div>
        </div>
        
        <div class="row"> <!-- obs -->
          @if ($category->obs)
          <div class="group grid-size-10">
            <div class="label">Observações</div>
            <div class="field border-top-primary">{{ $category->obs }}</div>
          </div>
          @endif
        </div>
        
        <div class="row">
          <a href="#" class="group grid-size-5"></a>
          <a href="/categories/edit/{{ $category->id }}" class="group grid-size-2">
            <div class="field action-area bgc-primary normal-btn">Editar</div>
          </a>
          <a href="/categories/delete/{{ $category->id }}" class="group grid-size-2">
            <div class="field action-area bgc-dark-red normal-btn">Excluir</div>
          </a>

        </div>
      </div>
    </a>

    @endforeach

    @else

    <h3>Não há categorias cadastradas</h3>
    
    @endif

    <div class="button-field">
      <a class="btn btn-primary" href="/categories/new">
        Criar Categoria
      </a>
    </div>

  </div>  

@endsection