@extends('layouts.app')
@section('title', "Visualizar Categoria - $category->name")
@section('content')
  <div class="page-title-container">
    <div class="page-icon">
      <img src="{{ asset('img/categories.png') }}" alt="-">
    </div>

    <div class="page-text">
      <div class="page-title">{{ $category->name }}</div>
      <div class="page-description">Itens cadastrados ?????</div>
    </div>
  </div>


@endsection