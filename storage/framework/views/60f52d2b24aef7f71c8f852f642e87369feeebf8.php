
<?php $__env->startSection('title', "Visualizar Cliente - $client->name"); ?>
<?php $__env->startSection('content'); ?>
  <div class="page-title-container">
    <div class="page-icon">
      <img src="<?php echo e(asset('img/clients.png')); ?>" alt="-">
    </div>

    <div class="page-text">
      <div class="page-title">
        <?php echo e($client->name); ?>

        
        <span>
          <?php echo e($client->nickname ?? ''); ?>

        </span>
      </div>
      <div class="page-description">
        Cadastrado por <strong><?php echo e($user->name); ?></strong>
      </div>
    </div>
  </div>

  <div class="show-container">
    <div class="page">

      <div class="row">
        <div class="group grid-size-3"> <!-- created_at -->
          <div class="label">Cliente desde</div>
          <div class="field border-top-primary"><?php echo e($client->created_at); ?></div>
        </div>
  
        <div class="group grid-size-3"> <!-- updated+at -->
          <div class="label">Atualizado em</div>
          <div class="field border-top-primary"><?php echo e($client->updated_at); ?></div>
        </div>

        <div class="group grid-size-2">
          <div class="label">Total Gasto</div>
          <div class="field border-top-primary"><?php echo e($client->total_spent == 0 ? '--' : $client->total_spent); ?></div>
        </div>
        
        <div class="group grid-size-2">
          <div class="label">Saldo Devedor</div>
          <div class="field border-top-primary"><?php echo e($client->balance ?? '--'); ?></div>
        </div>
      </div>

      <div class="row">
        <div class="group grid-size-6"></div> <!-- it pushes rg and cpf field to the right-->

        <div class="group grid-size-2"> <!-- rg input -->
          <div class="label">R. G.</div>
          <div class="field border-top-primary"><?php echo e($client->rg ?? '--'); ?></div>
        </div>
  
        <div class="group grid-size-2"> <!-- cpf input -->
          <div class="label">C. P. F.</div>
          <div class="field border-top-primary"><?php echo e($client->cpf ?? '--'); ?></div>
        </div>
      </div>

      <div class="row">  
        <div class="group grid-size-3"> <!-- phone1 input -->
          <div class="label">Telefone 1</div>
          <div class="field border-top-primary"><?php echo e($client->phone1 ?? '--'); ?></div>
        </div>
  
        <div class="group grid-size-3"> <!-- phone2 input -->
          <div class="label">Telefone 2</div>
          <div class="field border-top-primary"><?php echo e($client->phone2 ?? '--'); ?></div>
        </div>

        <div class="group grid-size-4"> <!-- email input -->
          <div class="label">Email</div>
          <div class="field border-top-primary"><?php echo e($client->email ?? '--'); ?></div>
        </div>
      </div>      

      <div class="row">
        <div class="group grid-size-6"> <!-- address -->
          <div class="label">Endereço</div>
          <div class="field border-top-primary"><?php echo e($client->address ?? '--'); ?></div>
        </div>
  
        <div class="group grid-size-"> <!-- address_number -->
          <div class="label">Nº </div>
          <div class="field border-top-primary"><?php echo e($client->address_number ?? '--'); ?></div>
        </div>
  
        <div class="group grid-size-3"> <!-- neighborhood -->
          <div class="label">Bairro</div>
          <div class="field border-top-primary"><?php echo e($client->neighborhood ?? '--'); ?></div>
        </div>
      </div>
  
      <div class="row">
        <div class="group grid-size-4"> <!-- city -->
          <div class="label">Cidade</div>
          <div class="field border-top-primary"><?php echo e($client->city ?? '--'); ?></div>
        </div>
  
        <div class="group grid-size-2"> <!-- cep -->
          <div class="label">CEP</div>
          <div class="field border-top-primary"><?php echo e($client->cep ?? '--'); ?></div>
        </div>

        <div class="group grid-size-4"> <!-- uf -->
          <div class="label">Estado</div>
          <div class="field border-top-primary"><?php echo e($ufs[$client->uf_id -1]->name ?? '--'); ?></div>
        </div>        
      </div>

     

      <?php if($client->obs): ?>
      <div class="row"> <!-- obs -->
        <div class="group grid-size-10">
          <div class="label">Observações</div>
          <div class="field border-top-primary"><?php echo e($client->obs); ?></div>
        </div>
      </div>   
      <?php endif; ?>
    </div>
    
    <div class="button-field">
      <a class="btn btn-neutral" href="/clients">Voltar</a>
      <a class="btn btn-danger" href="/clients/delete/<?php echo e($client->id); ?>">Excluir</a>
      <a class="btn btn-primary" href="/clients/edit/<?php echo e($client->id); ?>">Editar</a>
    </div>
  </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\storeManager\resources\views/clients/showClient.blade.php ENDPATH**/ ?>