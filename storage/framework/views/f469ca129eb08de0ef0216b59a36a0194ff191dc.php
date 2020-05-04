
<?php $__env->startSection('title', 'Produtos'); ?>
<?php $__env->startSection('content'); ?>
  <div class="page-title-container">
    <div class="page-icon">
      <img src="<?php echo e(asset('img/products.png')); ?>" alt="-">
    </div>

    <div class="page-text">
      <div class="page-title">Todas os Produtos</div>
      <div class="page-description">Visualize todos os produtos cadastradas no sistema</div>
    </div>
  </div>

  <div class="page">
    <?php if(count($products) > 0): ?> 
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="/products/<?php echo e($product->id); ?>">
      <div class="hover-area">
        <div class="row"> <!-- name, products -->
          <div class="group grid-size-4">
            <div class="label">Nome da Produto</div>
            <div class="field border-top-primary"><?php echo e($product->name); ?> <?php echo e($product->manufacturer ? '(' . $product->manufacturer . ')' : ''); ?></div>
          </div>
          
          <div class="group grid-size-2">
            <div class="label">Preço</div>
            <div class="field border-top-primary">R$ <?php echo e($product->sell_price); ?></div>
          </div>
          
          <div class="group grid-size-2">
            <?php if($product->promo_price): ?>
            <div class="label">Preço Promocional</div>
            <div class="field border-top-primary">R$ <?php echo e($product->promo_price); ?></div>
            <?php endif; ?>
          </div>

          <div class="group grid-size-2">
            <div class="label">Estoque</div>
            <div class="field border-top-primary"><?php echo e($product->stock); ?> un.</div>
          </div>
        </div>
      </div>
    </a>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php else: ?>

    <h3>Não há produtos cadastrados</h3>
    
    <?php endif; ?>

    <div class="button-field">
      <a class="btn btn-primary" href="/products/new">
        Cadastrar
      </a>
    </div>

  </div>  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\storeManager\resources\views/products/products.blade.php ENDPATH**/ ?>