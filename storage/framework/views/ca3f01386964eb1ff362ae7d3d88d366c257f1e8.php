
<?php $__env->startSection('title', "Visuaizar Usuário - $user->name"); ?>
<?php $__env->startSection('content'); ?>
<?php if($user): ?>
  <div class="page-title-container">
    <div class="page-icon">
      <img src="<?php echo e(asset('img/user.png')); ?>" alt="-">
    </div>

    <div class="page-text">
      <div class="page-title">
        <?php echo e($user->name ?? '--'); ?>

        
        <span>
          <?php echo e($user->deleted_at ? 'Inativo' : 'Ativo'); ?>

        </span>
      </div>

      <div class="page-description">
        Tipo de acesso: 
        
        <strong>
          <?php echo e($user->is_admin ? 'Administrador - ' : 'Geral - '); ?>

        </strong>
        
        Usuário do sistema: 
        
        <strong>
          <?php echo e($user->username); ?>

        </strong>
      </div>
    </div>
  </div>
   
  <div class="show-container">
    <div class="show-page">
      <div class="show-row">
  
        <div class="show-group grid-size-4"> <!-- email input -->
          <div class="show-label">Email</div>
          <div class="show-data"><?php echo e($user->email ?? '--'); ?></div>
        </div>
  
        <div class="show-group grid-size-3"> <!-- phone1 input -->
          <div class="show-label">Telefone 1</div>
          <div class="show-data"><?php echo e($user->phone1 ?? '--'); ?></div>
        </div>
  
        <div class="show-group grid-size-3"> <!-- phone2 input -->
          <div class="show-label">Telefone 2</div>
          <div class="show-data"><?php echo e($user->phone2 ?? '--'); ?></div>
        </div>
      </div>      
        
      <div class="show-row">
        <div class="show-group grid-size-6"></div> <!-- it pushes rg and cpf field to the right-->

        <div class="show-group grid-size-2"> <!-- rg input -->
          <div class="show-label">R. G.</div>
          <div class="show-data"><?php echo e($user->rg ?? '--'); ?></div>
        </div>
  
        <div class="show-group grid-size-2"> <!-- cpf input -->
          <div class="show-label">C. P. F.</div>
          <div class="show-data"><?php echo e($user->cpf ?? '--'); ?></div>
        </div>
      </div>

      <div class="show-row">
        <div class="show-group grid-size-6"> <!-- address -->
          <div class="show-label">Endereço</div>
          <div class="show-data"><?php echo e($user->address ?? '--'); ?></div>
        </div>
  
        <div class="show-group grid-size-"> <!-- address_number -->
          <div class="show-label">Nº </div>
          <div class="show-data"><?php echo e($user->address_number ?? '--'); ?></div>
        </div>
  
        <div class="show-group grid-size-3"> <!-- neighborhood -->
          <div class="show-label">Bairro</div>
          <div class="show-data"><?php echo e($user->neighborhood ?? '--'); ?></div>
        </div>
      </div>
  
      <div class="show-row">
        <div class="show-group grid-size-4"> <!-- city -->
          <div class="show-label">Cidade</div>
          <div class="show-data"><?php echo e($user->city ?? '--'); ?></div>
        </div>
  
        <div class="show-group grid-size-2"> <!-- cep -->
          <div class="show-label">CEP</div>
          <div class="show-data"><?php echo e($user->cep ?? '--'); ?></div>
        </div>

        <div class="show-group grid-size-4"> <!-- uf -->
          <div class="show-label">Estado</div>
          <div class="show-data"><?php echo e($ufs[$user->uf_id -1]->name ?? '--'); ?></div>
        </div>        
      </div>

      <div class="show-row">
        <div class="show-group grid-size-4"> <!-- deleted_at -->
          <div class="show-label">Inativado em</div>
          <div class="show-data"><?php echo e($user->deleted_at ? $user->deleted_at : 'Usuário atualmente ativo'); ?></div>
        </div>
  
        <div class="show-group grid-size-3"> <!-- created_at -->
          <div class="show-label">Cadastrado em</div>
          <div class="show-data"><?php echo e($user->created_at); ?></div>
        </div>
  
        <div class="show-group grid-size-3"> <!-- updated+at -->
          <div class="show-label">Atualizado em</div>
          <div class="show-data"><?php echo e($user->updated_at); ?></div>
        </div>
      </div>

      <?php if($user->obs): ?>
      <div class="show-row"> <!-- obs -->
        <div class="show-group grid-size-">
          <div class="show-label">Observações</div>
          <div class="show-data"><?php echo e($user->obs); ?></div>
        </div>
      </div>   
      <?php endif; ?>
    </div>
    
    <div class="button-field">
      <a class="btn btn-neutral" href="/users">Voltar</a>
      <?php if(session('current_user')->id != $user->id): ?> 
        <a class="btn btn-danger" href="/users/delete/<?php echo e($user->id); ?>">Excluir</a>
      <?php endif; ?>
      <a class="btn btn-primary" href="/users/edit/<?php echo e($user->id); ?>">Editar</a>
    </div>
  </div>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\storeManager\resources\views/users/showUser.blade.php ENDPATH**/ ?>