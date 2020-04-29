@extends('layouts.app')
@section('title', "Visuaizar Usuário - $user->name")
@section('content')
@if ($user)
  <div class="page-title-container">
    <div class="page-icon">
      <img src="{{asset('img/user.png')}}" alt="-">
    </div>

    <div class="page-text">
      <div class="page-title">
        {{ $user->name ?? '--' }}
        
        <span>
          {{ $user->deleted_at ? 'Inativo' : 'Ativo' }}
        </span>
      </div>

      <div class="page-description">
        <span>
          <span>Tipo de acesso: </span>
          
          <strong>
            {{ $user->is_admin ? 'Administrador' : 'Geral' }}
          </strong>
        </span>
        
        <span>
          <span>Usuário do sistema: </span> 
          
          <strong>
            {{ $user->username }}
          </strong>
        </span>
      </div>
    </div>
  </div>
   
  <div class="show-container">
    <div class="page">
      <div class="row">  
        <div class="group grid-size-3"> <!-- phone1 input -->
          <div class="label">Telefone 1</div>
          <div class="field border-top-primary">{{ $user->phone1 ?? '--' }}</div>
        </div>
  
        <div class="group grid-size-3"> <!-- phone2 input -->
          <div class="label">Telefone 2</div>
          <div class="field border-top-primary">{{ $user->phone2 ?? '--' }}</div>
        </div>

        <div class="group grid-size-4"> <!-- email input -->
          <div class="label">Email</div>
          <div class="field border-top-primary">{{ $user->email ?? '--' }}</div>
        </div>
      </div>      
        
      <div class="row">
        <div class="group grid-size-6"></div> <!-- it pushes rg and cpf field to the right-->

        <div class="group grid-size-2"> <!-- rg input -->
          <div class="label">R. G.</div>
          <div class="field border-top-primary">{{ $user->rg ?? '--' }}</div>
        </div>
  
        <div class="group grid-size-2"> <!-- cpf input -->
          <div class="label">C. P. F.</div>
          <div class="field border-top-primary">{{ $user->cpf ?? '--' }}</div>
        </div>
      </div>

      <div class="row">
        <div class="group grid-size-6"> <!-- address -->
          <div class="label">Endereço</div>
          <div class="field border-top-primary">{{ $user->address ?? '--' }}</div>
        </div>
  
        <div class="group grid-size-"> <!-- address_number -->
          <div class="label">Nº </div>
          <div class="field border-top-primary">{{ $user->address_number ?? '--' }}</div>
        </div>
  
        <div class="group grid-size-3"> <!-- neighborhood -->
          <div class="label">Bairro</div>
          <div class="field border-top-primary">{{ $user->neighborhood ?? '--' }}</div>
        </div>
      </div>
  
      <div class="row">
        <div class="group grid-size-4"> <!-- city -->
          <div class="label">Cidade</div>
          <div class="field border-top-primary">{{ $user->city ?? '--'}}</div>
        </div>
  
        <div class="group grid-size-2"> <!-- cep -->
          <div class="label">CEP</div>
          <div class="field border-top-primary">{{ $user->cep ?? '--' }}</div>
        </div>

        <div class="group grid-size-4"> <!-- uf -->
          <div class="label">Estado</div>
          <div class="field border-top-primary">{{ $ufs[$user->uf_id -1]->name ?? '--' }}</div>
        </div>        
      </div>

      <div class="row">
        <div class="group grid-size-4"> <!-- deleted_at -->
          <div class="label">Inativado em</div>
          <div class="field border-top-primary">{{ $user->deleted_at ? $user->deleted_at : 'Usuário atualmente ativo'  }}</div>
        </div>
  
        <div class="group grid-size-3"> <!-- created_at -->
          <div class="label">Cadastrado em</div>
          <div class="field border-top-primary">{{ $user->created_at }}</div>
        </div>
  
        <div class="group grid-size-3"> <!-- updated+at -->
          <div class="label">Atualizado em</div>
          <div class="field border-top-primary">{{ $user->updated_at }}</div>
        </div>
      </div>

      @if ($user->obs)
      <div class="row"> <!-- obs -->
        <div class="group grid-size-10">
          <div class="label">Observações</div>
          <div class="field border-top-primary">{{ $user->obs}}</div>
        </div>
      </div>   
      @endif
    </div>
    
    <div class="button-field">
      <a class="btn btn-neutral" href="/users">Voltar</a>
      @if (session('current_user')->id != $user->id) 
        <a class="btn btn-danger" href="/users/delete/{{ $user->id }}">Excluir</a>
      @endif
      <a class="btn btn-primary" href="/users/edit/{{ $user->id }}">Editar</a>
    </div>
  </div>
@endif

@endsection