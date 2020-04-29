@extends('layouts.app')
@section('title', 'Cadastrar Fornecedor')
@section('content')
  <div class="page-title-container">
    <div class="page-icon">
      <img src="{{asset('img/suppliers.png')}}" alt="-">
    </div>

    <div class="page-text">
      <div class="page-title">Cadastrar Fornecedor</div>
      <div class="page-description">Cadastre um novo fornecedor preenchendo os dados abaixo</div>
    </div>
  </div>

  <div class="form-container">
    <form action="/suppliers" class="page" method="POST">
      @csrf

      <div class="row"> <!-- name, cnpj, ie -->
        <div class="group grid-size-5"> <!-- name input -->
          <label for="name" class="label">Nome</label>
          <input type="text" 
            name="name" 
            id="name" 
            class="field border-bottom-primary"
            placeholder="Nome do novo fornecedor"> 
          <div class="invalid-msg">
          @if ($errors->has('name'))
            {{ $errors->first('name') }}
          @endif
          </div>
        </div> <!-- end name input -->

        <div class="group grid-size-3"> <!-- cnpj input -->
          <label for="cnpj" class="label">CNPJ/CPF</label>
          <input type="text" 
            name="cnpj" 
            id="cnpj" 
            class="field border-bottom-primary"
            placeholder="Somente números">
          
          <div class="invalid-msg">
          @if ($errors->has('cnpj'))
            {{ $errors->first('cnpj') }}
          @endif
          </div>
        </div> <!-- end cnpj input -->
  
        <div class="group grid-size-2"> <!-- ie input -->
          <label for="ie" class="label">I. E.</label>
          <input type="text" 
            name="ie" 
            id="ie" 
            class="field border-bottom-primary"
            placeholder="Somente números">
          
          <div class="invalid-msg">
          @if ($errors->has('ie'))
            {{ $errors->first('ie') }}
          @endif
          </div>
        </div> <!-- end ie input -->
      </div>

      <div class="row"> <!-- company -->
        <div class="group grid-size-10">
          <label for="company" class="label">Empresa</label>
          <input type="text" 
            name="company" 
            id="company"
            class="field border-bottom-primary"
            placeholder="É representante/sócio de uma empresa? Qual?">
        </div>
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