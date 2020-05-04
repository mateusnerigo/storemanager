
<?php $__env->startSection('title', "Cliente - $client->name"); ?>
<?php $__env->startSection('content'); ?>
  <div class="page-title-container">
    <div class="page-icon">
      <img src="<?php echo e(asset('img/clients.png')); ?>" alt="-">
    </div>

    <div class="page-text">
      <div class="page-title"><?php echo e($client->name); ?><span>Editar dados do Cliente</span></div>
      <div class="page-description">Edite os dados do cliente alterando as informações abaixo</div>
    </div>
  </div>

  <form action="/clients/<?php echo e($client->id); ?>" class="page" method="post">
    <?php echo csrf_field(); ?>
    <div class="row">
      <div class="group grid-size-10"> <!-- name input -->
        <label for="name" class="label">Nome (Obrigatório)</label>
        <input type="text" 
          name="name" 
          id="name" 
          class="field border-bottom-primary"
          value="<?php echo e($client->name); ?>"
          placeholder="Nome do cliente"> 
        <div class="invalid-msg">
        <?php if($errors->has('name')): ?>
          <?php echo e($errors->first('name')); ?>

        <?php endif; ?>
        </div>
      </div> <!-- end name input -->
    </div>

    <div class="row"> <!-- vip, nickname, rg, cpf -->
      <div class="group grid-size-3"> <!-- vip input -->
        <label for="vip" class="label">Tipo de cliente (Obrigatório)</label>
        <select 
          name="vip" 
          id="vip" 
          class="field border-bottom-primary">
          <option value="" disabled selected>Selecione</option>
          <option value="0">Normal</option>
          <option value="1">VIP</option>
        </select>

        <div class="invalid-msg">
        <?php if($errors->has('vip')): ?>
          <?php echo e($errors->first('vip')); ?>

        <?php endif; ?>
        </div>
      </div> <!-- end vip input -->

      <div class="group grid-size-3"> <!-- nickname input -->
        <label for="nickname" class="label">Apelido</label>
        <input type="text" 
          name="nickname" 
          id="nickname" 
          class="field border-bottom-primary"
          value="<?php echo e($client->nickname); ?>"
          placeholder="Usuário de acesso ao sistema">
        
        <div class="invalid-msg">
        <?php if($errors->has('nickname')): ?>
          <?php echo e($errors->first('nickname')); ?>

        <?php endif; ?>
        </div>
      </div> <!-- end nickname input -->
      
      <div class="group grid-size-2"> <!-- rg input -->
        <label for="rg" class="label">R. G.</label>
        <input type="text" 
          name="rg" 
          id="rg" 
          class="field border-bottom-primary"
          value="<?php echo e($client->rg); ?>"
          placeholder="Somente números">
        
        <div class="invalid-msg">
        <?php if($errors->has('rg')): ?>
          <?php echo e($errors->first('rg')); ?>

        <?php endif; ?>
        </div>
      </div> <!-- end rg input -->

      <div class="group grid-size-2"> <!-- cpf input -->
        <label for="cpf" class="label">C. P. F.</label>
        <input type="text" 
          name="cpf" 
          id="cpf" 
          class="field border-bottom-primary"
          value="<?php echo e($client->cpf); ?>"
          placeholder="Somente números">
        
        <div class="invalid-msg">
        <?php if($errors->has('cpf')): ?>
          <?php echo e($errors->first('cpf')); ?>

        <?php endif; ?>
        </div>
      </div> <!-- end cpf input -->
    </div>

    <div class="row"> <!-- email, phone -->
      <div class="group grid-size-3"> <!-- phone1 input -->
        <label for="phone1" class="label">Telefone</label>
        <input type="text" 
          name="phone1" 
          id="phone1" 
          class="field border-bottom-primary"
          value="<?php echo e($client->phone1); ?>"
          placeholder="Fixo ou Celular">
      </div> <!-- end phone1 input -->

      <div class="group grid-size-3"> <!-- phone2 input -->
        <label for="phone2" class="label">Telefone Secundário</label>
        <input type="text" 
          name="phone2" 
          id="phone2" 
          class="field border-bottom-primary"
          value="<?php echo e($client->phone2); ?>"
          placeholder="Opcional">
      </div> <!-- end phone2 input -->

      <div class="group grid-size-4"> <!-- email input -->
        <label for="email" class="label">Email</label>
        <input type="email" 
          name="email" 
          id="email" 
          class="field border-bottom-primary"
          value="<?php echo e($client->email); ?>"
          placeholder="Email">
        
        <div class="invalid-msg">
        <?php if($errors->has('email')): ?>
          <?php echo e($errors->first('email')); ?>

        <?php endif; ?>
        </div>
      </div> <!-- end email input -->
    </div>

    <div class="row"> <!-- address -->
      <div class="group grid-size-6"> <!-- address input -->
        <label for="address" class="label">Endereço</label>
        <input type="text" 
          name="address" 
          id="address" 
          class="field border-bottom-primary"
          value="<?php echo e($client->address); ?>"
          placeholder="Endereço">
      </div> <!-- end address input -->

      <div class="group grid-size-1"> <!-- address_number input -->
        <label for="address_number" class="label">Nº</label>
        <input type="text" 
          name="address_number" 
          id="address_number" 
          class="field border-bottom-primary"
          value="<?php echo e($client->address_number); ?>"
          placeholder="Número do imóvel">
      </div> <!-- end address_number input -->

      <div class="group grid-size-3"> <!-- neighborhood input -->
        <label for="neighborhood" class="label">Bairro</label>
        <input type="text" 
          name="neighborhood" 
          id="neighborhood" 
          class="field border-bottom-primary"
          value="<?php echo e($client->neighborhood); ?>"
          placeholder="Bairro">
      </div> <!-- end neighborhood input -->
    </div>

    <div class="row"> <!-- cep, city, uf -->  
      <div class="group grid-size-4"> <!-- city input -->
        <label for="city" class="label">Cidade</label>
        <input type="text" 
          name="city" 
          id="city" 
          class="field border-bottom-primary"
          value="<?php echo e($client->city); ?>"
          placeholder="Cidade">
      </div> <!-- end city input -->

      <div class="group grid-size-2"> <!-- cep input -->
        <label for="cep" class="label">CEP</label>
        <input type="text" 
          name="cep" 
          id="cep" 
          class="field border-bottom-primary"
          value="<?php echo e($client->cep); ?>"
          placeholder="Somente números">
      </div> <!-- end cep input -->

      <div class="group grid-size-4"> <!-- uf input -->
        <label for="uf_id" class="label">Estado</label>
        <select name="uf_id" 
          id="uf_id" 
          class="field border-bottom-primary">
          <option value="" disabled selected>Selecione o estado</option>
          <?php $__currentLoopData = $ufs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($uf->id); ?>"><?php echo e($uf->name); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div> <!-- end uf input -->
    </div>
    
    <div class="row"> <!-- obs -->
      <div class="group grid-size-10"> <!-- obs input -->
        <label for="obs" class="label">Observações (Opcional)</label>
        <textarea name="obs" 
          id="obs"  
          class="field border-bottom-primary no-resize" 
          rows="1" 
          maxlength="150" 
          value="<?php echo e($client->obs); ?>"
          placeholder="Adicione alguma observação sobre o usuário"></textarea>

        <div class="invalid-msg">
        <?php if($errors->has('obs')): ?>
          <?php echo e($errors->first('obs')); ?>

        <?php endif; ?>
        </div>
      </div> <!-- end obs input -->
    </div>
      
    <div class="button-field">
      <a href="/clients/<?php echo e($client->id); ?>" class="btn btn-neutral">Cancelar</a>
      <button class="btn btn-primary">Alterar</button>
    </div>
  </form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\storeManager\resources\views/clients/editClient.blade.php ENDPATH**/ ?>