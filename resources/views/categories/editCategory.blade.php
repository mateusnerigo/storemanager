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

  <form action="/categories/{{ $category->id }}" class="page" method="POST">
    @csrf
    <div class="row">
      <div class="group grid-size-10">
        <label for="name" class="label">Nome (Obrigatório)</label>
        <input type="text" 
        name="name" 
        id="name" 
        class="field border-bottom-primary"
        value="{{ $category->name }}"
        placeholder="Insira um nome para a categoria">

        <div class="invalid-msg">
          @if ($errors->has('name'))
            {{ $errors->first('name') }}
          @endif
        </div>
      </div>
    </div>

    <div class="row">
      <div class="group grid-size-10">
        <label for="obs" class="label">Observação</label>
        <textarea name="obs" 
        id="obs" 
        class="field border-bottom-primary no-resize" 
        rows="1"
        maxlength="150"
        value="{{ $category->obs }}"
        placeholder="Adicione alguma observação sobre a categoria"></textarea>
      </div>
    </div>
      
    <div class="button-field">
      <a href="/categories" class="btn btn-neutral">Cancelar</a>
      <button class="btn btn-primary" type="submit">Salvar</button>
    </div>
  </form>


@endsection