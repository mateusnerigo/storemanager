
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

  <form action="/categories" class="page" method="post">
    <?php echo csrf_field(); ?>
    <div class="row">
      <div class="group grid-size-10">
        <label for="name" class="label">Nome</label>
        <input type="text" 
        name="name" 
        id="name" 
        class="field border-bottom-primary"
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
        placeholder="Adicione alguma observação sobre a categoria"></textarea>
      </div>
    </div>
      
    <div class="button-field">
      <a href="/categories" class="btn btn-neutral">Cancelar</a>
      <button class="btn btn-primary">Salvar</button>
    </div>
  </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\storeManager\resources\views/categories/newCategory.blade.php ENDPATH**/ ?>