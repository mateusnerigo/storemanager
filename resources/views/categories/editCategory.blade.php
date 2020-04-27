@extends('layouts.app')
@section('title', "Editar Categoria - $category->name")
@section('content')
  <div class="page-title-container">
    <div class="page-icon">
      <img src="{{ asset('img/categories.png') }}" alt="-">
    </div>

    <div class="page-text">
      <div class="page-title">{{ $category->name }}<span>Editar Categoria</span></div>
      <div class="page-description">Edite a categoria alterando as informações abaixo</div>
    </div>
  </div>


@endsection