@extends('layouts.app')
@section('title', 'Produtos')
@section('content')
  <div class="page-title-container">
    <div class="page-icon">
      <img src="{{ asset('img/products.png') }}" alt="-">
    </div>

    <div class="page-text">
      <div class="page-title">Todas os Produtos</div>
      <div class="page-description">Visualize todos os produtos cadastradas no sistema</div>
    </div>
  </div>

  <div class="page">
    @if (count($products) > 0) 
    @foreach ($products as $product)
    <a href="/products/{{ $product->id }}">
      <div class="hover-area">
        <div class="row"> <!-- name, products -->
          <div class="group grid-size-4">
            <div class="label">Nome da Produto</div>
            <div class="field border-top-primary">{{ $product->name }} {{ $product->manufacturer ? '(' . $product->manufacturer . ')' : '' }}</div>
          </div>
          
          <div class="group grid-size-2">
            <div class="label">Preço</div>
            <div class="field border-top-primary">R$ {{ $product->sell_price }}</div>
          </div>
          
          <div class="group grid-size-2">
            @if ($product->promo_price)
            <div class="label">Preço Promocional</div>
            <div class="field border-top-primary">R$ {{ $product->promo_price }}</div>
            @endif
          </div>

          <div class="group grid-size-2">
            <div class="label">Estoque</div>
            <div class="field border-top-primary">{{ $product->stock }} un.</div>
          </div>
        </div>
      </div>
    </a>

    @endforeach

    @else

    <h3>Não há produtos cadastrados</h3>
    
    @endif

    <div class="button-field">
      <a class="btn btn-primary" href="/products/new">
        Cadastrar
      </a>
    </div>

  </div>  

@endsection