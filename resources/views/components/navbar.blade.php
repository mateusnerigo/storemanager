<nav class="nav-app">
  <div class="nav-container">
    <div class="nav-header text-center">
      <a href="/landing">
        {{ session('current_user')->name }}
      </a>
      <div class="nav-horizontal-divider"></div>
    </div>
    <div class="nav-item">
      <a href="/users" class="nav-link">
        <span class="nav-text">
          Usuários
        </span>
        <img src={{ asset('img/users.png') }} class="nav-icon">
      </a>
    </div>
    <div class="nav-item">
      <a href="/clients" class="nav-link">
        <span class="nav-text">
          Clientes
        </span>
        <img src={{ asset('img/clients.png') }} class="nav-icon">
      </a>
    </div>
    <div class="nav-item">
      <a href="/products" class="nav-link">
        <span class="nav-text">
          Produtos
        </span>
        <img src={{ asset('img/products.png') }} class="nav-icon">
      </a>
    </div>
    <div class="nav-item">
      <a href="/categories" class="nav-link">
        <span class="nav-text">
          Categorias
        </span>
        <img src={{ asset('img/categories.png') }} class="nav-icon">
      </a>
    </div>
    <div class="nav-item">
      <a href="/suppliers" class="nav-link">
        <span class="nav-text">
          Fornecedores
        </span>
        <img src={{ asset('img/suppliers.png') }} class="nav-icon">
      </a>
    </div>
    <div class="nav-item">
      <a href="/cash_movement" class="nav-link">
        <span class="nav-text">
          Caixa
        </span>
        <img src={{ asset('img/cash_movement.png') }} class="nav-icon">
      </a>
    </div>
    <div class="nav-item">
      <a href="/sheets" class="nav-link">
        <span class="nav-text">
          Relatórios
        </span>
        <img src={{ asset('img/sheets.png') }} class="nav-icon">
      </a>
    </div>
    <div class="nav-item ">
      <a href="/settings" class="nav-link">
        <span class="nav-text">
          Configurações
        </span>
        <img src={{ asset('img/settings.png') }} class="nav-icon">
      </a>
    </div>

    <div class="nav-horizontal-block"></div>

    <div class="nav-item last-nav-item">
      <div class="nav-horizontal-divider"></div>
      <a href="/login" class="nav-link">
        <span class="nav-text">
          Sair
        </span>
        <img src={{ asset('img/out.png') }} class="nav-icon">
      </a>
    </div>
  </div>

</nav>