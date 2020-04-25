@extends('layouts.app')
@section('title', 'Usuários do Sistema')
@section('content')
  <div class="page-title-container">
    <div class="page-icon">
      <img src="{{asset('img/users.png')}}" alt="-">
    </div>

    <div class="page-text">
      <div class="page-title">Todos os Usuários</div>
      <div class="page-description">Visualize todos os usuários cadastrados no sistema</div>
    </div>
  </div>
  
  <div class="table-container">
    <table>
      <thead>
        <tr>
          <td>Nome</td>
          <td>Usuário</td>
          <td>Tipo de Acesso</td>
          <td>Situação</td>
          <td class="table-empty"> </td>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
          <td>{{ $user->name }}</td>
          <td>{{ $user->username }}</td>
          <td>{{ ($user->is_admin) ? 'Administrador' : 'Geral' }}</td>
          <td>{{ ($user->deleted_at) ? 'Inativo' : 'Ativo' }}</td>
          <td class="table-action">
            <a href="/users/{{$user->id}}">Visualizar</a>
          </td>
        </tr>
            
        @endforeach
      </tbody>
    </table>
  </div>
  
  <div class="button-field">
    <a class="btn btn-primary" href="/users/new">
      Novo Usuário
    </a>
  </div>

@endsection