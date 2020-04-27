
<?php $__env->startSection('title', 'Criar Nova Categoria'); ?>
<?php $__env->startSection('content'); ?>
  <div class="page-title-container">
    <div class="page-icon">
      <img src="<?php echo e(asset('img/categories.png')); ?>" alt="-">
    </div>

    <div class="page-text">
      <div class="page-title">Cadastrar categoria</div>
      <div class="page-description">Crie uma nova categoria preenchendo os dados abaixo</div>
    </div>
  </div>

  <!-- implementar form -->
  <div class="button-field">
    <a href="/categories" class="btn btn-neutral">Cancelar</a>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\storeManager\resources\views/categories/newCategory.blade.php ENDPATH**/ ?>