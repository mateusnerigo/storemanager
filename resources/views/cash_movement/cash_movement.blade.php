@extends('layouts.app')
@section('title', 'Caixa')
@section('content')
  <div class="page-title-container">
    <div class="page-icon">
      <img src="{{ asset('img/cash_movement.png') }}" alt="-">
    </div>

    <div class="page-text">
      <div class="page-title">Caixa</div>
      <div class="page-description">Efetue a compra ou a venda de produtos</div>
    </div>
  </div>

  <div class="button-field">
    <a href="cash_movement/buy" class="btn btn-primary">
      Comprar
    </a>
    
    <a href="cash_movement/sell" class="btn btn-primary">
      Vender
    </a>
  </div>


@endsection