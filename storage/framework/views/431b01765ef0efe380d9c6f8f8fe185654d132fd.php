
<?php $__env->startSection('title', "Editar Categoria - $category->name"); ?>
<?php $__env->startSection('content'); ?>
  <div class="page-title-container">
    <div class="page-icon">
      <img src="<?php echo e(asset('img/categories.png')); ?>" alt="-">
    </div>

    <div class="page-text">
      <div class="page-title"><?php echo e($category->name); ?><span>Editar Categoria</span></div>
      <div class="page-description">Edite a categoria alterando as informações abaixo</div>
    </div>
  </div>

  <form action="/categories/<?php echo e($category->id); ?>" class="page" method="POST">
    <?php echo csrf_field(); ?>
    <div class="row">
      <div class="group grid-size-10">
        <label for="name" class="label">Nome</label>
        <input type="text" 
        name="name" 
        id="name" 
        class="field border-bottom-primary"
        value="<?php echo e($category->name); ?>"
        placeholder="Insira um nome para a categoria">

        <div class="invalid-msg">
          <?php if($errors->has('name')): ?>
            <?php echo e($errors->first('name')); ?>

          <?php endif; ?>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="group grid-size-10">
        <label for="obs" class="label">Observação</label>
        <textarea name="obs" 
        id="obs" 
        class="field border-bottom-primary no-resize" 
        rows="1"
        maxlength="150"
        value="<?php echo e($category->obs); ?>"
        placeholder="Adicione alguma observação sobre a categoria"></textarea>
      </div>
    </div>
      
    <div class="button-field">
      <a href="/categories" class="btn btn-neutral">Cancelar</a>
      <button class="btn btn-primary" type="submit">Salvar</button>
    </div>
  </form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\storeManager\resources\views/categories/editCategory.blade.php ENDPATH**/ ?>