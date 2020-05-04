@extends('layouts.app')
@section('title', 'Cadastrar Usuário')
@section('content')
  <div class="page-title-container">
    <div class="page-icon">
      <img src="{{asset('img/user.png')}}" alt="-">
    </div>

    <div class="page-text">
      <div class="page-title">Cadastrar Usuário</div>
      <div class="page-description">Cadastre um novo usuário preenchendo os dados abaixo</div>
    </div>
  </div>

  <div class="form-container">
    <form action="/users" class="page" method="POST">
      @csrf

      <div class="row"> <!-- name, rg, cpf -->
        <div class="group grid-size-6"> <!-- name input -->
          <label for="name" class="label">Nome (Obrigatório)</label>
          <input type="text" 
            name="name" 
            id="name" 
            class="field border-bottom-primary"
            placeholder="Nome do novo usuário"> 
          <div class="invalid-msg">
          @if ($errors->has('name'))
            {{ $errors->first('name') }}
          @endif
          </div>
        </div> <!-- end name input -->

        <div class="group grid-size-2"> <!-- rg input -->
          <label for="rg" class="label">R. G.</label>
          <input type="text" 
            name="rg" 
            id="rg" 
            class="field border-bottom-primary"
            placeholder="Somente números">
          
          <div class="invalid-msg">
          @if ($errors->has('rg'))
            {{ $errors->first('rg') }}
          @endif
          </div>
        </div> <!-- end rg input -->
  
        <div class="group grid-size-2"> <!-- cpf input -->
          <label for="cpf" class="label">C. P. F.</label>
          <input type="text" 
            name="cpf" 
            id="cpf" 
            class="field border-bottom-primary"
            placeholder="Somente números">
          
          <div class="invalid-msg">
          @if ($errors->has('cpf'))
            {{ $errors->first('cpf') }}
          @endif
          </div>
        </div> <!-- end cpf input -->
      </div>
      
      <div class="row"> <!-- is_admin, username, password -->
        <div class="group grid-size-3"> <!-- is_admin input -->
          <label for="is_admin" class="label">Tipo de Acesso (Obrigatório)</label>
          <select 
            name="is_admin" 
            id="is_admin" 
            class="field border-bottom-primary">
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

        <div class="group grid-size-3"> <!-- username input -->
          <label for="username" class="label">Usuário (Obrigatório)</label>
          <input type="text" 
            name="username" 
            id="username" 
            class="field border-bottom-primary"
            placeholder="Usuário de acesso ao sistema">
          
          <div class="invalid-msg">
          @if ($errors->has('username'))
            {{ $errors->first('username') }}
          @endif
          </div>
        </div> <!-- end username input -->
        
        <div class="group grid-size-2"> <!-- password input -->
          <label for="password" class="label">Senha (Obrigatório)</label>
          <input type="password" 
            name="password" 
            id="password" 
            class="field border-bottom-primary"
            placeholder="Senha de acesso">
          
          <div class="invalid-msg">
          @if ($errors->has('password'))
            {{ $errors->first('password') }}
          @endif
          </div>
        </div> <!-- end password input -->
  
        <div class="group grid-size-2"> <!-- confirm_password input -->
          <label for="confirm_password" class="label">Confirmar Senha (Obrigatório)</label>
          <input type="password" 
            name="confirm_password" 
            id="confirm_password" 
            class="field border-bottom-primary"
            placeholder="Confirme a senha">
          
          <div class="invalid-msg">
          @if ($errors->has('confirm_password'))
            {{ $errors->first('confirm_password') }}
          @endif
          </div>
        </div> <!-- end confirm_password input -->
      </div>
      
      <div class="row"> <!-- email, phone -->
        <div class="group grid-size-3"> <!-- phone1 input -->
          <label for="phone1" class="label">Telefone</label>
          <input type="text" 
            name="phone1" 
            id="phone1" 
            class="field border-bottom-primary"
            placeholder="Fixo ou Celular">
        </div> <!-- end phone1 input -->
  
        <div class="group grid-size-3"> <!-- phone2 input -->
          <label for="phone2" class="label">Telefone Secundário</label>
          <input type="text" 
            name="phone2" 
            id="phone2" 
            class="field border-bottom-primary"
            placeholder="Opcional">
        </div> <!-- end phone2 input -->

        <div class="group grid-size-4"> <!-- email input -->
          <label for="email" class="label">Email</label>
          <input type="email" 
            name="email" 
            id="email" 
            class="field border-bottom-primary"
            placeholder="Email">
          
          <div class="invalid-msg">
          @if ($errors->has('email'))
            {{ $errors->first('email') }}
          @endif
          </div>
        </div> <!-- end email input -->
      </div>

      <div class="row"> <!-- address -->
        <div class="group grid-size-6"> <!-- address input -->
          <label for="address" class="label">Endereço</label>
          <input type="text" 
            name="address" 
            id="address" 
            class="field border-bottom-primary"
            placeholder="Endereço">
        </div> <!-- end address input -->
  
        <div class="group grid-size-1"> <!-- address_number input -->
          <label for="address_number" class="label">Nº</label>
          <input type="text" 
            name="address_number" 
            id="address_number" 
            class="field border-bottom-primary"
            placeholder="Número do imóvel">
        </div> <!-- end address_number input -->
  
        <div class="group grid-size-3"> <!-- neighborhood input -->
          <label for="neighborhood" class="label">Bairro</label>
          <input type="text" 
            name="neighborhood" 
            id="neighborhood" 
            class="field border-bottom-primary"
            placeholder="Bairro">
        </div> <!-- end neighborhood input -->
      </div>

      <div class="row"> <!-- cep, city, uf -->  
        <div class="group grid-size-4"> <!-- city input -->
          <label for="city" class="label">Cidade</label>
          <input type="text" 
            name="city" 
            id="city" 
            class="field border-bottom-primary"
            placeholder="Cidade">
        </div> <!-- end city input -->

        <div class="group grid-size-2"> <!-- cep input -->
          <label for="cep" class="label">CEP</label>
          <input type="text" 
            name="cep" 
            id="cep" 
            class="field border-bottom-primary"
            placeholder="Somente números">
        </div> <!-- end cep input -->
  
        <div class="group grid-size-4"> <!-- uf input -->
          <label for="uf" class="label">Estado</label>
          <select name="uf" 
            id="uf" 
            class="field border-bottom-primary">
            <option value="" disabled selected>Selecione o estado</option>
            @foreach ($ufs as $uf)
            <option value="{{$uf->id}}">{{$uf->name}}</option>
            @endforeach
          </select>
        </div> <!-- end uf input -->
      </div>
      
      <div class="row"> <!-- obs -->
        <div class="group grid-size-10"> <!-- obs input -->
          <label for="obs" class="label">Observações (Opcional)</label>
          <textarea name="obs" 
            id="obs"  
            class="field border-bottom-primary no-resize" 
            rows="1" 
            maxlength="150" 
            placeholder="Adicione alguma observação sobre o usuário"></textarea>
  
          <div class="invalid-msg">
          @if ($errors->has('obs'))
            {{ $errors->first('obs') }}
          @endif
          </div>
        </div> <!-- end obs input -->
      </div>
      
      <div class="button-field">
        <a href="/users" class="btn btn-neutral">Cancelar</a>
        <button class="btn btn-primary">Salvar</button>
      </div>
    </form>
  </div>

@endsection