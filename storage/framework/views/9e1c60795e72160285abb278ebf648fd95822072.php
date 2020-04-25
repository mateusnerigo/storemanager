<nav class="nav-app">
  <div class="nav-container">
    <div class="nav-header text-center">
      <a href="/landing">
        <?php echo e(session('current_user')->name); ?>

      </a>
      <div class="nav-horizontal-divider"></div>
    </div>
    <div class="nav-item">
      <a href="/users" class="nav-link">
        <span class="nav-text">
          Usuários
        </span>
        <img src=<?php echo e(asset('img/users.png')); ?> class="nav-icon">
      </a>
    </div>
    <div class="nav-item">
      <a href="/clients" class="nav-link">
        <span class="nav-text">
          Clientes
        </span>
        <img src=<?php echo e(asset('img/clients.png')); ?> class="nav-icon">
      </a>
    </div>
    <div class="nav-item">
      <a href="/products" class="nav-link">
        <span class="nav-text">
          Produtos
        </span>
        <img src=<?php echo e(asset('img/products.png')); ?> class="nav-icon">
      </a>
    </div>
    <div class="nav-item">
      <a href="/categories" class="nav-link">
        <span class="nav-text">
          Categorias
        </span>
        <img src=<?php echo e(asset('img/categories.png')); ?> class="nav-icon">
      </a>
    </div>
    <div class="nav-item">
      <a href="/suppliers" class="nav-link">
        <span class="nav-text">
          Fornecedores
        </span>
        <img src=<?php echo e(asset('img/suppliers.png')); ?> class="nav-icon">
      </a>
    </div>
    <div class="nav-item">
      <a href="/addresses" class="nav-link">
        <span class="nav-text">
          Endereços
        </span>
        <img src=<?php echo e(asset('img/adress.png')); ?> class="nav-icon">
      </a>
    </div>
    <div class="nav-item">
      <a href="/sales" class="nav-link">
        <span class="nav-text">
          Caixa
        </span>
        <img src=<?php echo e(asset('img/sales.png')); ?> class="nav-icon">
      </a>
    </div>
    <div class="nav-item">
      <a href="/sheets" class="nav-link">
        <span class="nav-text">
          Relatórios
        </span>
        <img src=<?php echo e(asset('img/sheets.png')); ?> class="nav-icon">
      </a>
    </div>
    <div class="nav-item ">
      <a href="/settings" class="nav-link">
        <span class="nav-text">
          Configurações
        </span>
        <img src=<?php echo e(asset('img/settings.png')); ?> class="nav-icon">
      </a>
    </div>

    <div class="nav-horizontal-block"></div>

    <div class="nav-item last-nav-item">
      <div class="nav-horizontal-divider"></div>
      <a href="/login" class="nav-link">
        <span class="nav-text">
          Sair
        </span>
        <img src=<?php echo e(asset('img/out.png')); ?> class="nav-icon">
      </a>
    </div>
  </div>

</nav><?php /**PATH C:\xampp\htdocs\storeManager\resources\views/components/navbar.blade.php ENDPATH**/ ?>