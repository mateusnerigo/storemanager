@extends('layouts.app')
@section('title', "Visuaizar Usuário - $selected_user->name")
@section('content')
@if ($selected_user)
  <div class="page-title-container">
    <div class="page-icon">
      <img src="{{asset('img/user.png')}}" alt="-">
    </div>

    <div class="page-text">
      <div class="page-title">{{ $selected_user->name ?? '--' }}<span>{{ $selected_user->is_active ? 'Ativo' : 'Inativo' }}</span></div>
      <div class="page-description">Tipo de acesso: <strong>{{ $selected_user->is_admin ? 'Administrador' : 'Geral' }}</strong></div>
    </div>
  </div>
   
  <div class="show-page">
    <div class="show-container">
      <div class="show-group">
        <div class="show-field">
          <div class="show-label">Usuário de acesso</div>
          <div class="show-data">{{ $selected_user->username ?? '--' }}</div>
        </div>
  
        <div class="show-field">
          <div class="show-label">Email</div>
          <div class="show-data">{{ $selected_user->email ?? '--' }}</div>
        </div>
  
        <div class="show-field">
          <div class="show-label">Telefone 1</div>
          <div class="show-data">{{ $selected_user->phone1 ?? '--' }}</div>
        </div>
  
        @if ($selected_user->phone2)
        <div class="show-field">
          <div class="show-label">Telefone 2</div>
          <div class="show-data">{{ $selected_user->phone2 ?? '--' }}</div>
        </div>
        @endif
        
        <div class="show-field">
          <div class="show-label">R. G.</div>
          <div class="show-data">{{ $selected_user->rg ?? '--' }}</div>
        </div>
  
        <div class="show-field">
          <div class="show-label">C. P. F.</div>
          <div class="show-data">{{ $selected_user->cpf ?? '--' }}</div>
        </div>
      </div>      

      <div class="show-group">
        <div class="show-field">
          <div class="show-label">Endereço</div>
          <div class="show-data">{{ $selected_user->address ?? '--' }}</div>
        </div>
  
        <div class="show-field">
          <div class="show-label">Nº </div>
          <div class="show-data">{{ $selected_user->address_number ?? '--' }}</div>
        </div>
  
        <div class="show-field">
          <div class="show-label">Bairro</div>
          <div class="show-data">{{ $selected_user->neighborhood ?? '--' }}</div>
        </div>
  
        <div class="show-field">
          <div class="show-label">Cidade</div>
          <div class="show-data">{{ $selected_user->city ?? '--'}}</div>
        </div>
  
        <div class="show-field">
          <div class="show-label">Estado</div>
          <div class="show-data">{{ $ufs[$selected_user->uf_id -1]->name ?? '--' }}</div>
        </div>
  
        <div class="show-field">
          <div class="show-label">CEP</div>
          <div class="show-data">{{ $selected_user->cep ?? '--' }}</div>
        </div>
      </div>
      
      <div class="show-group">
        <div class="show-field">
          <div class="show-label">Inativado em</div>
          <div class="show-data">{{ $selected_user->inactive ? $selected_user->inactive : 'Usuário atualmente ativo'  }}</div>
        </div>
  
        <div class="show-field">
          <div class="show-label">Cadastrado em</div>
          <div class="show-data">{{ $selected_user->created_at }}</div>
        </div>
  
        <div class="show-field">
          <div class="show-label">Atualizado em</div>
          <div class="show-data">{{ $selected_user->updated_at }}</div>
        </div>
      </div>

      @if ($selected_user->obs)
      <div class="show-group">
        <div class="show-field">
          <div class="show-label">Observações</div>
          <div class="show-data">{{ $selected_user->obs}}</div>
        </div>
      </div>   
      @endif
    </div>
    
    <div class="show-button-group">
      <div class="button-field">
        <a class="btn btn-neutral" href="/users">Voltar</a>
      </div>

      <div class="button-field">
        <a class="btn btn-primary" href="/users/{{ $selected_user->id }}/edit">Editar</a>
        <a class="btn btn-danger" href="#">Excluir</a>
      </div>
    </div>
  </div>
@endif

@endsection