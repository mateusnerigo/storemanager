@extends('layouts.app')
@section('title', "Editar Usuário - $user->name")
@section('content')
  <div class="page-title-container">
    <div class="page-icon">
      <img src="{{asset('img/user.png')}}" alt="-">
    </div>

    <div class="page-text">
      <div class="page-title">{{ $user->name }}<span>Editar Usuário</span></div>
      <div class="page-description">Edite os dados do usuário alterando as informações abaixo</div>
    </div>
  </div>

  <div class="form-container">

    <form action="/users/{{ $user->id }}" class="input-form" method="POST">
      @csrf
      @method('PUT')

      <div class="input-row"> <!-- name, rg, cpf -->
        <div class="input-group grid-size-6"> <!-- name input -->
          <label for="name" class="form-label">Nome</label>
          <input type="text" 
            name="name" 
            id="name" 
            class="form-input"
            value="{{ $user->name }}"
            placeholder="Nome do novo usuário"> 
          <div class="invalid-msg">
          @if ($errors->has('name'))
            {{ $errors->first('name') }}
          @endif
          </div>
        </div> <!-- end name input -->

        <div class="input-group grid-size-2"> <!-- rg input -->
          <label for="rg" class="form-label">R. G.</label>
          <input type="text" 
            name="rg" 
            id="rg" 
            class="form-input sz4"
            value="{{ $user->rg }}"
            placeholder="Somente números">
          
          <div class="invalid-msg">
          @if ($errors->has('rg'))
            {{ $errors->first('rg') }}
          @endif
          </div>
        </div> <!-- end rg input -->
  
        <div class="input-group grid-size-2"> <!-- cpf input -->
          <label for="cpf" class="form-label">C. P. F.</label>
          <input type="text" 
            name="cpf" 
            id="cpf" 
            class="form-input sz4"
            value="{{ $user->cpf }}"
            placeholder="Somente números">
          
          <div class="invalid-msg">
          @if ($errors->has('cpf'))
            {{ $errors->first('cpf') }}
          @endif
          </div>
        </div> <!-- end cpf input -->
      </div>

      <div class="input-row"> <!-- username, password -->

        <div class="input-group grid-size-3"> <!-- is_admin input -->
          <label for="is_admin" class="form-label">Tipo de Acesso</label>
          <select 
            name="is_admin" 
            id="is_admin" 
            class="form-input sz3">
            <option value="" disabled selected>Selecione</option>
            <option value="0">Geral</option>
            <option value="1">Administrador</option>
          </select>
  
          <div class="invalid-msg">
          @if ($errors->has('is_admin'))
            {{ $errors->first('is_admin') }}
          @endif
          </div>
        </div> <!-- end is_admin input -->

        <div class="input-group grid-size-3"> <!-- username input -->
          <label for="username" class="form-label">Usuário</label>
          <input type="text" 
            name="username" 
            id="username" 
            class="form-input sz4"
            value="{{ $user->username }}"
            placeholder="Usuário de acesso ao sistema">
          
          <div class="invalid-msg">
          @if ($errors->has('username'))
            {{ $errors->first('username') }}
          @endif
          </div>
        </div> <!-- end username input -->
        
        <div class="input-group grid-size-2"> <!-- password input -->
          <label for="password" class="form-label">Senha</label>
          <input type="password" 
            name="password" 
            id="password" 
            class="form-input sz4"
            placeholder="Senha de acesso">
          
          <div class="invalid-msg">
          @if ($errors->has('password'))
            {{ $errors->first('password') }}
          @endif
          </div>
        </div> <!-- end password input -->
  
        <div class="input-group grid-size-2"> <!-- confirm_password input -->
          <label for="confirm_password" class="form-label">Confirmar Senha</label>
          <input type="password" 
            name="confirm_password" 
            id="confirm_password" 
            class="form-input sz4"
            placeholder="Confirme a senha">
          
          <div class="invalid-msg">
          @if ($errors->has('confirm_password'))
            {{ $errors->first('confirm_password') }}
          @endif
          </div>
        </div> <!-- end confirm_password input -->
      </div>

      <div class="input-row"> <!-- address -->
        <div class="input-group grid-size-6"> <!-- address input -->
          <label for="address" class="form-label">Endereço</label>
          <input type="text" 
            name="address" 
            id="address" 
            class="form-input sz7"
            value="{{ $user->address }}"
            placeholder="Endereço">
        </div> <!-- end address input -->
  
        <div class="input-group grid-size-1"> <!-- address_number input -->
          <label for="address_number" class="form-label">Nº</label>
          <input type="text" 
            name="address_number" 
            id="address_number" 
            class="form-input sz4"
            value="{{ $user->address_number }}"
            placeholder="Número">
        </div> <!-- end address_number input -->
  
        <div class="input-group grid-size-3"> <!-- neighborhood input -->
          <label for="neighborhood" class="form-label">Bairro</label>
          <input type="text" 
            name="neighborhood" 
            id="neighborhood" 
            class="form-input sz4"
            value="{{ $user->neighborhood }}"
            placeholder="Bairro">
        </div> <!-- end neighborhood input -->
      </div>

      <div class="input-row"> <!-- city, cep, uf -->
        <div class="input-group grid-size-4"> <!-- city input -->
          <label for="city" class="form-label">Cidade</label>
          <input type="text" 
            name="city" 
            id="city" 
            class="form-input sz7"
            value="{{ $user->city }}"
            placeholder="Cidade">
        </div> <!-- end city input -->

        <div class="input-group grid-size-2"> <!-- cep input -->
          <label for="cep" class="form-label">CEP</label>
          <input type="text" 
            name="cep" 
            id="cep" 
            class="form-input sz4"
            value="{{ $user->cep }}"
            placeholder="Somente números">
        </div> <!-- end cep input -->
  
        <div class="input-group grid-size-4"> <!-- uf input -->
          <label for="uf" class="form-label">Estado</label>
          <select name="uf" 
            id="uf" 
            class="form-input sz4">
            <option value="" disabled>Selecione o estado</option>
            @foreach ($ufs as $uf)
            <option value="{{$uf->id}}">{{$uf->name}}</option>
            @endforeach
          </select>
        </div> <!-- end uf input -->
      </div>

      <div class="input-row"> <!-- email, phone -->
        <div class="input-group grid-size-4"> <!-- email input -->
          <label for="email" class="form-label">Email</label>
          <input type="email" 
            name="email" 
            id="email" 
            class="form-input sz7"
            value="{{ $user->email }}"
            placeholder="Email">
          
          <div class="invalid-msg">
          @if ($errors->has('email'))
            {{ $errors->first('email') }}
          @endif
          </div>
        </div> <!-- end email input -->
  
        <div class="input-group grid-size-3"> <!-- phone1 input -->
          <label for="phone1" class="form-label">Telefone</label>
          <input type="text" 
            name="phone1" 
            id="phone1" 
            class="form-input sz4"
            value="{{ $user->phone1 }}"
            placeholder="Fixo ou Celular">
        </div> <!-- end phone1 input -->
  
        <div class="input-group grid-size-3"> <!-- phone2 input -->
          <label for="phone2" class="form-label">Telefone Secundário (Opcional)</label>
          <input type="text" 
            name="phone2" 
            id="phone2" 
            class="form-input sz4"
            value="{{ $user->phone2 }}"
            placeholder="Fixo ou Celular">
        </div> <!-- end phone2 input -->
      </div>

      <div class="input-row"> <!-- obs -->
        <div class="input-group grid-size-10"> <!-- obs input -->
          <label for="obs" class="form-label">Observações (Opcional)</label>
          <textarea name="obs" 
            id="obs"  
            class="form-input form-text-area" 
            rows="1" 
            maxlength="150" 
            value="{{ $user->obs }}"
            placeholder="Adicione alguma observação sobre o usuário"></textarea>
  
          <div class="invalid-msg">
          @if ($errors->has('obs'))
            {{ $errors->first('obs') }}
          @endif
          </div>
        </div> <!-- end obs input -->
      </div>

      <div class="button-field">
        <a class="btn btn-neutral" href="/users/{{ $user->id }}" class="button-cancell">Cancelar</a>
        <button class="btn btn-primary" type="submit" class="button-confirm">Salvar</button>
      </div>
    </form>
  </div>

@endsection