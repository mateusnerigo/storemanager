
<?php $__env->startSection('title', 'Fornecedores'); ?>
<?php $__env->startSection('content'); ?>
  <div class="page-title-container">
    <div class="page-icon">
      <img src="<?php echo e(asset('img/suppliers.png')); ?>" alt="-">
    </div>

    <div class="page-text">
      <div class="page-title">Todos os fornecedores</div>
      <div class="page-description">Visualize todos os fonecedores cadastrados</div>
    </div>
  </div>

  <div class="page">
    <?php if(count($suppliers) > 0): ?> 
    <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="/suppliers/<?php echo e($supplier->id); ?>">
      <div class="hover-area">
        <div class="row"> <!--  -->
          <div class="group grid-size-5">
            <div class="label">Nome</div> <!-- name -->
            <div class="field border-top-primary"><?php echo e($supplier->name); ?></div>
          </div>
          
          <dov class="group grid-size-5">
            <div class="label">Empresa</div>
            <div class="field border-top-primary"><?php echo e($supplier->company ?? '--'); ?></div>
          </dov>
        </div>
        
        <div class="row"> <!-- obs -->
          <div class="group grid-size-10">
            <div class="label">Observações</div>
            <div class="field border-top-primary"><?php echo e($supplier->obs ?? '--'); ?></div>
          </div>
        </div>
        
        <div class="row">
          <a href="#" class="group grid-size-5"></a>
          <a href="/suppliers/edit/<?php echo e($supplier->id); ?>" class="group grid-size-2">
            <div class="field action-area bgc-primary normal-btn">Editar</div>
          </a>
          <a href="/suppliers/delete/<?php echo e($supplier->id); ?>" class="group grid-size-2">
            <div class="field action-area bgc-dark-red normal-btn">Excluir</div>
          </a>

        </div>
      </div>
    </a>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php else: ?>

    <h3>Não há fornecedores cadastradas</h3>
    
    <?php endif; ?>

    <div class="button-field">
      <a class="btn btn-primary" href="/suppliers/new">
        Cadastrar Fornecedor
      </a>
    </div>

  </div>  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\storeManager\resources\views/suppliers/suppliers.blade.php ENDPATH**/ ?>