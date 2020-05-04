
<?php $__env->startSection('title', 'Categorias'); ?>
<?php $__env->startSection('content'); ?>
  <div class="page-title-container">
    <div class="page-icon">
      <img src="<?php echo e(asset('img/categories.png')); ?>" alt="-">
    </div>

    <div class="page-text">
      <div class="page-title">Todas as categorias</div>
      <div class="page-description">Visualize todas as categorias cadastradas no sistema</div>
    </div>
  </div>

  <div class="page">
    <?php if(count($categories) > 0): ?> 
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="/categories/<?php echo e($category->id); ?>">
      <div class="hover-area">
        <div class="row"> <!-- name, products -->
          <div class="group grid-size-6">
            <div class="label">Nome da Categoria</div>
            <div class="field border-top-primary"><?php echo e($category->name); ?></div>
          </div>
          
          <div class="group grid-size-4">
            <div class="label">Produtos Cadastrados</div>
            <div class="field border-top-primary">????</div>
          </div>
        </div>
        
        <div class="row"> <!-- obs -->
          <?php if($category->obs): ?>
          <div class="group grid-size-10">
            <div class="label">Observações</div>
            <div class="field border-top-primary"><?php echo e($category->obs); ?></div>
          </div>
          <?php endif; ?>
        </div>
        
        <div class="row">
          <a href="#" class="group grid-size-5"></a>
          <a href="/categories/edit/<?php echo e($category->id); ?>" class="group grid-size-2">
            <div class="field action-area bgc-primary normal-btn">Editar</div>
          </a>
          <a href="/categories/delete/<?php echo e($category->id); ?>" class="group grid-size-2">
            <div class="field action-area bgc-dark-red normal-btn">Excluir</div>
          </a>

        </div>
      </div>
    </a>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php else: ?>

    <h3>Não há categorias cadastradas</h3>
    
    <?php endif; ?>

    <div class="button-field">
      <a class="btn btn-primary" href="/categories/new">
        Cadastrar
      </a>
    </div>

  </div>  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\storeManager\resources\views/categories/categories.blade.php ENDPATH**/ ?>