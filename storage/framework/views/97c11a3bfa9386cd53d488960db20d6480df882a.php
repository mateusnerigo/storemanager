
<?php $__env->startSection('title', "Visualizar Categoria - $category->name"); ?>
<?php $__env->startSection('content'); ?>
  <div class="page-title-container">
    <div class="page-icon">
      <img src="<?php echo e(asset('img/categories.png')); ?>" alt="-">
    </div>

    <div class="page-text">
      <div class="page-title"><?php echo e($category->name); ?></div>
      <div class="page-description">Itens cadastrados ?????</div>
    </div>
  </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\storeManager\resources\views/categories/showCategory.blade.php ENDPATH**/ ?>