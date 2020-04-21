
<?php $__env->startSection('title', "Editar Usuário - $selected_user->name"); ?>
<?php $__env->startSection('content'); ?>
  <div class="form-container">
    <div class="form-icon"></div>

    <div class="page-title-container">
      <div class="page-icon">
        <img src="<?php echo e(asset('img/user.png')); ?>" alt="-">
      </div>
  
      <div class="page-text">
        <div class="page-title"><?php echo e($selected_user->name); ?><span>Editar Usuário</span></div>
        <div class="page-description">Edite os dados do usuário alterando as informações abaixo</div>
      </div>
    </div>

    <form action="<?php echo e(route('users.update', $selected_user->id)); ?>" class="new-form" method="POST">
      <?php echo csrf_field(); ?>
      <?php echo method_field('PUT'); ?>
      <div class="input-group"> <!-- name input -->
        <label for="name" class="form-label">Nome</label>
        <input type="text" 
          name="name" 
          id="name" 
          class="form-input <?php echo e($errors->has('name') ? 'invalid-input' : ''); ?>"
          value="<?php echo e($selected_user->name); ?>"
          placeholder="Nome do novo usuário"> 
        <div class="invalid-msg">
        <?php if($errors->has('name')): ?>
          <?php echo e($errors->first('name')); ?>

        <?php endif; ?>
        </div>
      </div> <!-- end name input -->

      <div class="input-group"> <!-- username input -->
        <label for="username" class="form-label">Usuário</label>
        <input type="text" 
          name="username" 
          id="username" 
          class="form-input <?php echo e($errors->has('username') ? 'invalid-input' : ''); ?>"
          value="<?php echo e($selected_user->username); ?>"
          placeholder="Usuário de acesso ao sistema">
        
        <div class="invalid-msg">
        <?php if($errors->has('username')): ?>
          <?php echo e($errors->first('username')); ?>

        <?php endif; ?>
        </div>
      </div> <!-- end username input -->
      
      <div class="input-group"> <!-- password input -->
        <label for="password" class="form-label">Senha</label>
        <input type="password" 
          name="password" 
          id="password" 
          class="form-input <?php echo e($errors->has('password') ? 'invalid-input' : ''); ?>"
          placeholder="Senha de acesso">
        
        <div class="invalid-msg">
        <?php if($errors->has('password')): ?>
          <?php echo e($errors->first('password')); ?>

        <?php endif; ?>
        </div>
      </div> <!-- end password input -->

      <div class="input-group"> <!-- confirm_password input -->
        <label for="confirm_password" class="form-label">Confirmar Senha</label>
        <input type="password" 
          name="confirm_password" 
          id="confirm_password" 
          class="form-input <?php echo e($errors->has('confirm_password') ? 'invalid-input' : ''); ?>"
          placeholder="Confirme a senha">
        
        <div class="invalid-msg">
        <?php if($errors->has('confirm_password')): ?>
          <?php echo e($errors->first('confirm_password')); ?>

        <?php endif; ?>
        </div>
      </div> <!-- end confirm_password input -->

      <div class="input-group"> <!-- email input -->
        <label for="email" class="form-label">Email</label>
        <input type="email" 
          name="email" 
          id="email" 
          class="form-input <?php echo e($errors->has('email') ? 'invalid-input' : ''); ?>"
          value="<?php echo e($selected_user->email); ?>"
          placeholder="Email">
        
        <div class="invalid-msg">
        <?php if($errors->has('email')): ?>
          <?php echo e($errors->first('email')); ?>

        <?php endif; ?>
        </div>
      </div> <!-- end email input -->

      <div class="input-group"> <!-- phone1 input -->
        <label for="phone1" class="form-label">Telefone</label>
        <input type="text" 
          name="phone1" 
          id="phone1" 
          class="form-input"
          value="<?php echo e($selected_user->phone1); ?>"
          placeholder="Fixo ou Celular">
      </div> <!-- end phone1 input -->

      <div class="input-group"> <!-- phone2 input -->
        <label for="phone2" class="form-label">Telefone Secundário</label>
        <input type="text" 
          name="phone2" 
          id="phone2" 
          class="form-input"
          value="<?php echo e($selected_user->phone2); ?>"
          placeholder="Fixo ou Celular">
      </div> <!-- end phone2 input -->

      <div class="input-group"> <!-- rg input -->
        <label for="rg" class="form-label">R. G.</label>
        <input type="text" 
          name="rg" 
          id="rg" 
          class="form-input <?php echo e($errors->has('rg') ? 'invalid-input' : ''); ?>"
          value="<?php echo e($selected_user->rg); ?>"
          placeholder="Somente números">
        
        <div class="invalid-msg">
        <?php if($errors->has('rg')): ?>
          <?php echo e($errors->first('rg')); ?>

        <?php endif; ?>
        </div>
      </div> <!-- end rg input -->

      <div class="input-group"> <!-- cpf input -->
        <label for="cpf" class="form-label">C. P. F.</label>
        <input type="text" 
          name="cpf" 
          id="cpf" 
          class="form-input <?php echo e($errors->has('cpf') ? 'invalid-input' : ''); ?>"
          value="<?php echo e($selected_user->cpf); ?>"
          placeholder="Somente números">
        
        <div class="invalid-msg">
        <?php if($errors->has('cpf')): ?>
          <?php echo e($errors->first('cpf')); ?>

        <?php endif; ?>
        </div>
      </div> <!-- end cpf input -->

      <div class="input-group"> <!-- address input -->
        <label for="address" class="form-label">Endereço</label>
        <input type="text" 
          name="address" 
          id="address" 
          class="form-input"
          value="<?php echo e($selected_user->address); ?>"
          placeholder="Endereço">
      </div> <!-- end address input -->

      <div class="input-group"> <!-- address_number input -->
        <label for="address_number" class="form-label">Nº</label>
        <input type="text" 
          name="address_number" 
          id="address_number" 
          class="form-input"
          value="<?php echo e($selected_user->address_number); ?>"
          placeholder="Número do imóvel">
      </div> <!-- end address_number input -->

      <div class="input-group"> <!-- neighborhood input -->
        <label for="neighborhood" class="form-label">Bairro</label>
        <input type="text" 
          name="neighborhood" 
          id="neighborhood" 
          class="form-input"
          value="<?php echo e($selected_user->neighborhood); ?>"
          placeholder="Bairro">
      </div> <!-- end neighborhood input -->
      
      <div class="input-group"> <!-- cep input -->
        <label for="cep" class="form-label">CEP</label>
        <input type="text" 
          name="cep" 
          id="cep" 
          class="form-input"
          value="<?php echo e($selected_user->cep); ?>"
          placeholder="Somente números">
      </div> <!-- end cep input -->

      <div class="input-group"> <!-- city input -->
        <label for="city" class="form-label">Cidade</label>
        <input type="text" 
          name="city" 
          id="city" 
          class="form-input"
          value="<?php echo e($selected_user->city); ?>"
          placeholder="Cidade">
      </div> <!-- end city input -->

      <div class="input-group"> <!-- uf input -->
        <label for="uf" class="form-label">Estado</label>
        <select name="uf" 
          id="uf" 
          class="form-select">
          <option value="" disabled>Selecione o estado</option>
          <?php $__currentLoopData = $ufs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value="<?php echo e($uf->id); ?>"><?php echo e($uf->name); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div> <!-- end uf input -->

      <div class="input-group"> <!-- is_admin input -->
        <label for="is_admin" class="form-label">Tipo de Acesso</label>
        <select 
          name="is_admin" 
          id="is_admin" 
          class="form-select <?php echo e($errors->has('is_admin') ? 'invalid-input' : ''); ?>">
          <option value="0">Geral</option>
          <option value="1">Administrador</option>
        </select>

        <div class="invalid-msg">
        <?php if($errors->has('is_admin')): ?>
          <?php echo e($errors->first('is_admin')); ?>

        <?php endif; ?>
        </div>
      </div> <!-- end is_admin input -->

      <div class="input-group"> <!-- obs input -->
        <label for="obs" class="form-label">Estado</label>
        <textarea name="obs" 
          id="obs"  
          class="form-text-area" 
          rows="10" 
          maxlength="150" 
          value="<?php echo e($selected_user->obs); ?>"
          placeholder="Adicione alguma observação sobre o usuário"></textarea>

        <div class="invalid-msg">
        <?php if($errors->has('obs')): ?>
          <?php echo e($errors->first('obs')); ?>

        <?php endif; ?>
        </div>
      </div> <!-- end obs input -->

      <div class="button-field">
        <a class="btn btn-neutral" href="/users/<?php echo e($selected_user->id); ?>" class="button-cancell">Cancelar</a>
        <button class="btn btn-primary" type="submit" class="button-confirm">Salvar</button>
      </div>
    </form>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\storeManager\resources\views/users/editUser.blade.php ENDPATH**/ ?>