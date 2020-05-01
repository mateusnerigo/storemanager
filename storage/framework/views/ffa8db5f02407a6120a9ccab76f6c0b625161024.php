
<?php $__env->startSection('title', 'Clientes'); ?>
<?php $__env->startSection('content'); ?>
  <div class="page-title-container">
    <div class="page-icon">
      <img src="<?php echo e(asset('img/clients.png')); ?>" alt="-">
    </div>

    <div class="page-text">
      <div class="page-title">Todas os clientes</div>
      <div class="page-description">Visualize todos os clients cadastrados no sistema</div>
    </div>
  </div>

  <div class="page">
    <?php if(count($clients) > 0): ?> 
    <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="/clients/<?php echo e($client->id); ?>">
      <div class="hover-area">
        <div class="row"> <!-- name, products -->
          <?php if($client->nickname): ?>
          <div class="group grid-size-6">
            <div class="label">Cliente</div>
            <div class="field border-top-primary"><?php echo e($client->name); ?> (<?php echo e($client->nickname); ?>)</div>
          </div>
          <?php else: ?>
          <div class="group grid-size-6">
            <div class="label">Nome</div>
            <div class="field border-top-primary"><?php echo e($client->name); ?></div>
          </div>
          <?php endif; ?>    
          
          <div class="group grid-size-2">
            <div class="label">Total Gasto</div>
            <div class="field border-top-primary"><?php echo e($client->total_spent == 0 ? '--' : $client->total_spent); ?></div>
          </div>
          
          <div class="group grid-size-2">
            <div class="label">Saldo Devedor</div>
            <div class="field border-top-primary"><?php echo e($client->balance ?? '--'); ?></div>
          </div>
          
        </div>
        
        <div class="row"> <!-- obs -->
          <?php if($client->obs): ?>
          <div class="group grid-size-10">
            <div class="label">Observações</div>
            <div class="field border-top-primary"><?php echo e($client->obs); ?></div>
          </div>
          <?php endif; ?>
        </div>
        
        <div class="row">
          <a href="#" class="group grid-size-5"></a>
          <a href="/clients/edit/<?php echo e($client->id); ?>" class="group grid-size-2">
            <div class="field action-area bgc-primary normal-btn">Editar</div>
          </a>
          <a href="/clients/delete/<?php echo e($client->id); ?>" class="group grid-size-2">
            <div class="field action-area bgc-dark-red normal-btn">Excluir</div>
          </a>

        </div>
      </div>
    </a>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php else: ?>

    <h3>Não há clientes cadastrados</h3>
    
    <?php endif; ?>

    <div class="button-field">
      <a class="btn btn-primary" href="/clients/new">
        Cadastrar
      </a>
    </div>

  </div>  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\storeManager\resources\views/clients/clients.blade.php ENDPATH**/ ?>