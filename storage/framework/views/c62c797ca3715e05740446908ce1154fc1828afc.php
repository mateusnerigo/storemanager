
<?php $__env->startSection('title', 'Cadastrar novo Produto'); ?>
<?php $__env->startSection('content'); ?>
  <div class="page-title-container">
    <div class="page-icon">
      <img src="<?php echo e(asset('img/products.png')); ?>" alt="-">
    </div>

    <div class="page-text">
      <div class="page-title">Cadastrar produto</div>
      <div class="page-description">
        Cadastre um novo produto preenchendo os dados abaixo
      </div>
    </div>
  </div>

  <form action="/products" class="page" method="POST">
    <?php echo csrf_field(); ?>

    <div class="row"> <!-- name, stock, category -->
      <div class="group grid-size-6"> <!-- name -->
        <label for="name" class="label">Nome (Obrigatório)</label>
        <input type="text" 
          name="name" 
          id="name" 
          class="field border-bottom-primary"
          placeholder="Nome do produto">

        <div class="invalid-msg">
        <?php if($errors->has('name')): ?>
          <?php echo e($errors->first('name')); ?>

        <?php endif; ?>
        </div>
      </div> <!-- end name -->

      <div class="group grid-size-1"> <!-- stock -->
        <label for="stock" class="label">Estoque</label>  
        <input type="number" 
          name="stock" 
          id="stock" 
          class="field border-bottom-primary" 
          placeholder="Quantidade ">
      </div> <!-- end stock -->
      
      <div class="group grid-size-3"> <!-- category -->
        <label for="category_id" class="label">Categoria (Obrigatório)</label>
        <select name="category_id" 
          id="category_id" 
          class="field border-bottom-primary">
          <option value="" default selected>Selecione uma categoria</option>
          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        
        <div class="invalid-msg">
        <?php if($errors->has('category_id')): ?>
          <?php echo e($errors->first('category_id')); ?>

        <?php endif; ?>
        </div>
      </div> <!-- end category -->
    </div>
    
    <div class="row"> <!-- manufacturer, suppliers, extra_code -->
      <div class="group grid-size-3"> <!-- manufacturer -->
        <label for="manufacturer" class="label">Fabricante</label>
        <input type="text" 
          name="manufacturer" 
          id="manufacturer"
          class="field border-bottom-primary"
          placeholder="Marca">
      </div> <!-- end manufacturer -->

      <div class="group grid-size-3"> <!-- suppliers -->
        <label for="supplier_id" class="label">Fornecedor</label>
        <select name="supplier_id" 
          id="supplier_id" 
          class="field border-bottom-primary">
          <option value="" default selected>Selecione um fornecedor</option>
          <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($supplier->id); ?>"><?php echo e($supplier->name); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div> <!-- end suppliers -->

      <div class="group grid-size-1"> <!-- spacer --> </div>

      <div class="group grid-size-3"> <!-- extra_code -->
        <label for="extra_code" class="label">Código Extra</label>
        <input type="text" 
          name="extra_code" 
          id="extra_code" 
          class="field border-bottom-primary"
          placeholder="Código Interno (Opcional)">
      </div> <!-- end extra_code -->
    </div>
    
    <div class="row"> <!-- price -->
      <div class="group grid-size-3"> <!-- buy_price -->
        <label for="buy_price" class="label">Preço de compra - R$</label>  
        <input type="number" 
          name="buy_price" 
          id="buy_price" 
          class="field border-bottom-primary" 
          placeholder="Comprou por...">
      </div> <!-- end buy_price -->

      <div class="group grid-size-3"> <!-- sell_price -->
        <label for="sell_price" class="label">Preço de venda - R$</label>  
        <input type="number" 
          name="sell_price" 
          id="sell_price" 
          class="field border-bottom-primary" 
          placeholder="Vender por...">
      </div> <!-- end sell_price -->

      <div class="group grid-size-1"> <!-- spacer --> </div>
      
      <div class="group grid-size-3"> <!-- promo_price -->
        <label for="promo_price" class="label">Preço promocional - R$</label>  
        <input type="number" 
          name="promo_price" 
          id="promo_price" 
          class="field border-bottom-primary" 
          placeholder="Deixe em branco se não houver">
      </div> <!-- end promo_price -->
    </div>

    <div class="row"> <!-- desc, obs -->
      <div class="group grid-size-5"> <!-- desc input -->
        <label for="description" class="label">Descrição</label>
        <textarea name="description" 
          id="description"  
          class="field border-bottom-primary no-resize" 
          rows="1" 
          maxlength="150" 
          placeholder="Opcional - Descreva brevemente o produto">
        </textarea>
      </div> <!-- end desc input -->

      <div class="group grid-size-5"> <!-- obs input -->
        <label for="obs" class="label">Observações</label>
        <textarea name="obs" 
          id="obs"  
          class="field border-bottom-primary no-resize" 
          rows="1" 
          maxlength="150" 
          placeholder="Opcional - Adicione alguma observação sobre o produto">
        </textarea>
      </div> <!-- end obs input -->
    </div>

      
    <div class="button-field">
      <a href="/products" class="btn btn-neutral">Cancelar</a>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
  </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\storeManager\resources\views/products/newProduct.blade.php ENDPATH**/ ?>