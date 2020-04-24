@extends('layouts.app')
@section('title', 'Usuários do Sistema')
@section('content')
    
<div class="table-page">
  
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
        <th>Nome</th>
        <th>Usuário</th>
        <th>Tipo de Acesso</th>
        <th>Situação</th>
        <th></th>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
          <td>{{ $user->name }}</td>
          <td>{{ $user->username }}</td>
          <td>{{ ($user->is_admin) ? 'Administrador' : 'Geral' }}</td>
          <td>{{ ($user->deleted_at) ? 'Inativo' : 'Ativo' }}</td>
          <td>
            <a href="/users/{{$user->id}}">Visualizar</a>
          </td>
        </tr>
            
        @endforeach
      </tbody>
    </table>
  </div>
  
  <a class="btn btn-primary" href="/users/new">
    Novo Usuário
  </a>

</div>

@endsection