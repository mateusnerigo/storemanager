@extends('layouts.app')
@section('title', "Cliente - $client->name")
@section('content')
  <div class="page-title-container">
    <div class="page-icon">
      <img src="{{ asset('img/clients.png') }}" alt="-">
    </div>

    <div class="page-text">
      <div class="page-title">{{ $client->name }}<span>Editar dados do Cliente</span></div>
      <div class="page-description">Edite os dados do cliente alterando as informações abaixo</div>
    </div>
  </div>

  <form action="/clients/{{ $client->id }}" class="page" method="post">
    @csrf
    <div class="row">
      <div class="group grid-size-10"> <!-- name input -->
        <label for="name" class="label">Nome</label>
        <input type="text" 
          name="name" 
          id="name" 
          class="field border-bottom-primary"
          value="{{ $client->name }}"
          placeholder="Nome do cliente"> 
        <div class="invalid-msg">
        @if ($errors->has('name'))
          {{ $errors->first('name') }}
        @endif
        </div>
      </div> <!-- end name input -->
    </div>

    <div class="row"> <!-- vip, nickname, rg, cpf -->
      <div class="group grid-size-3"> <!-- vip input -->
        <label for="vip" class="label">Tipo de cliente</label>
        <select 
          name="vip" 
          id="vip" 
          class="field border-bottom-primary">
          <option value="" disabled selected>Selecione</option>
          <option value="0">Normal</option>
          <option value="1">VIP</option>
        </select>

        <div class="invalid-msg">
        @if ($errors->has('vip'))
          {{ $errors->first('vip') }}
        @endif
        </div>
      </div> <!-- end vip input -->

      <div class="group grid-size-3"> <!-- nickname input -->
        <label for="nickname" class="label">Apelido</label>
        <input type="text" 
          name="nickname" 
          id="nickname" 
          class="field border-bottom-primary"
          value="{{ $client->nickname }}"
          placeholder="Usuário de acesso ao sistema">
        
        <div class="invalid-msg">
        @if ($errors->has('nickname'))
          {{ $errors->first('nickname') }}
        @endif
        </div>
      </div> <!-- end nickname input -->
      
      <div class="group grid-size-2"> <!-- rg input -->
        <label for="rg" class="label">R. G.</label>
        <input type="text" 
          name="rg" 
          id="rg" 
          class="field border-bottom-primary"
          value="{{ $client->rg }}"
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
          value="{{ $client->cpf }}"
          placeholder="Somente números">
        
        <div class="invalid-msg">
        @if ($errors->has('cpf'))
          {{ $errors->first('cpf') }}
        @endif
        </div>
      </div> <!-- end cpf input -->
    </div>

    <div class="row"> <!-- email, phone -->
      <div class="group grid-size-3"> <!-- phone1 input -->
        <label for="phone1" class="label">Telefone</label>
        <input type="text" 
          name="phone1" 
          id="phone1" 
          class="field border-bottom-primary"
          value="{{ $client->phone1 }}"
          placeholder="Fixo ou Celular">
      </div> <!-- end phone1 input -->

      <div class="group grid-size-3"> <!-- phone2 input -->
        <label for="phone2" class="label">Telefone Secundário</label>
        <input type="text" 
          name="phone2" 
          id="phone2" 
          class="field border-bottom-primary"
          value="{{ $client->phone2 }}"
          placeholder="Opcional">
      </div> <!-- end phone2 input -->

      <div class="group grid-size-4"> <!-- email input -->
        <label for="email" class="label">Email</label>
        <input type="email" 
          name="email" 
          id="email" 
          class="field border-bottom-primary"
          value="{{ $client->email }}"
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
          value="{{ $client->address }}"
          placeholder="Endereço">
      </div> <!-- end address input -->

      <div class="group grid-size-1"> <!-- address_number input -->
        <label for="address_number" class="label">Nº</label>
        <input type="text" 
          name="address_number" 
          id="address_number" 
          class="field border-bottom-primary"
          value="{{ $client->address_number }}"
          placeholder="Número do imóvel">
      </div> <!-- end address_number input -->

      <div class="group grid-size-3"> <!-- neighborhood input -->
        <label for="neighborhood" class="label">Bairro</label>
        <input type="text" 
          name="neighborhood" 
          id="neighborhood" 
          class="field border-bottom-primary"
          value="{{ $client->neighborhood }}"
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
          value="{{ $client->city }}"
          placeholder="Cidade">
      </div> <!-- end city input -->

      <div class="group grid-size-2"> <!-- cep input -->
        <label for="cep" class="label">CEP</label>
        <input type="text" 
          name="cep" 
          id="cep" 
          class="field border-bottom-primary"
          value="{{ $client->cep }}"
          placeholder="Somente números">
      </div> <!-- end cep input -->

      <div class="group grid-size-4"> <!-- uf input -->
        <label for="uf_id" class="label">Estado</label>
        <select name="uf_id" 
          id="uf_id" 
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
          value="{{ $client->obs }}"
          placeholder="Adicione alguma observação sobre o usuário"></textarea>

        <div class="invalid-msg">
        @if ($errors->has('obs'))
          {{ $errors->first('obs') }}
        @endif
        </div>
      </div> <!-- end obs input -->
    </div>
      
    <div class="button-field">
      <a href="/clients/{{ $client->id }}" class="btn btn-neutral">Cancelar</a>
      <button class="btn btn-primary">Alterar</button>
    </div>
  </form>


@endsection