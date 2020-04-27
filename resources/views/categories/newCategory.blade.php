@extends('layouts.app')
@section('title', 'Criar Nova Categoria')
@section('content')
  <div class="page-title-container">
    <div class="page-icon">
      <img src="{{ asset('img/categories.png') }}" alt="-">
    </div>

    <div class="page-text">
      <div class="page-title">Cadastrar categoria</div>
      <div class="page-description">Crie uma nova categoria preenchendo os dados abaixo</div>
    </div>
  </div>

  <!-- implementar form -->
  <div class="button-field">
    <a href="/categories" class="btn btn-neutral">Cancelar</a>
  </div>

@endsection