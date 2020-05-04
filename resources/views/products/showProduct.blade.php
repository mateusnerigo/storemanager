@extends('layouts.app')
@section('title', "Visualizar Produto - $product->name")
@section('content')
  <div class="page-title-container">
    <div class="page-icon">
      <img src="{{ asset('img/products.png') }}" alt="-">
    </div>

    <div class="page-text">
    <div class="page-title">
      {{ $product->name }} 
      {{ $product->manufacturer ? '(' . $product->manufacturer . ')' : '' }}
      - Quantidade disponível: {{ $product->stock }}
    </div>
      <div class="page-description">Categoria: {{$category->name}}</div>
    </div>
  </div>

  <div class="show-container">
    <div class="page">

      <div class="row"> <!-- created_at, updated_at, buy, sell price -->
        <div class="group grid-size-3"> <!-- created_at -->
          <div class="label">Cadastrado em</div>
          <div class="field border-top-primary">{{ $product->created_at }}</div>
        </div>
  
        <div class="group grid-size-3"> <!-- updated_at -->
          <div class="label">Atualizado em</div>
          <div class="field border-top-primary">{{ $product->updated_at }}</div>
        </div>

        <div class="group grid-size-2"> <!-- buy_price -->
          <div class="label">Valor de Compra</div>
          <div class="field border-top-primary">R$ {{ $product->buy_price }}</div>
        </div>
        
        <div class="group grid-size-2"> <!-- sell_price -->
          <div class="label">Valor de Venda</div>
          <div class="field border-top-primary">R$ {{ $product->sell_price ?? '--' }}</div>
        </div>
      </div>

      <div class="row"> <!-- promo_price -->
        <div class="group grid-size-6"></div> <!-- it pushes promo price field to the right-->
  
        <div class="group grid-size-4"> <!-- promo_price input -->
          <div class="label">Preço promocional</div>
          <div class="field border-top-primary">R$ {{ $product->promo_price }}</div>
        </div>
      </div>

      <div class="row">  <!-- manuf, supplier, ex_code -->
        <div class="group grid-size-3"> <!-- manufacturer input -->
          <div class="label">Fabricante</div>
          <div class="field border-top-primary">{{ $product->manufacturer ?? '--' }}</div>
        </div>
  
        <div class="group grid-size-3"> <!-- supplier input -->
          <div class="label">Fornecedor</div>
          <div class="field border-top-primary">{{ $supplier->name ?? '--' }}</div>
        </div>

        <div class="group grid-size 1"></div>

        <div class="group grid-size-3"> <!-- extra_code input -->
          <div class="label">Código Extra</div>
          <div class="field border-top-primary">{{ $product->extra_code ?? '--' }}</div>
        </div>
      </div>      

      <div class="row"> <!-- obs, desc-->
        <div class="group grid-size-5">
          <div class="label">Descrição</div>
          <div class="field border-top-primary">{{ $product->description }}</div>
        </div>
        
        <div class="group grid-size-5">
          <div class="label">Observações</div>
          <div class="field border-top-primary">{{ $product->obs }}</div>
        </div>
      </div>   
    </div>



  <div class="button-field">
    <a class="btn btn-neutral" href="/products/{{ $product->id }}">Voltar</a>
    <a class="btn btn-danger" href="/products/delete/{{ $product->id }}">Excluir</a>
    <a class="btn btn-primary" href="/products/edit/{{ $product->id }}">Editar</a>
  </div>
@endsection