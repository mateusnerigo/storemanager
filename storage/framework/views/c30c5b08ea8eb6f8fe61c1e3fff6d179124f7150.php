
<?php $__env->startSection('title', "Visuaizar Usuário - $supplier->name"); ?>
<?php $__env->startSection('content'); ?>
<?php if($supplier): ?>
  <div class="page-title-container">
    <div class="page-icon">
      <img src="<?php echo e(asset('img/suppliers.png')); ?>" alt="-">
    </div>

    <div class="page-text">
      <div class="page-title">
        <?php echo e($supplier->name ?? '--'); ?>

      </div>

      <div class="page-description">
        <span>
          <span>Empresa: </span>
          
          <strong>
            <?php echo e($supplier->company ?? '--'); ?>

          </strong>
        </span>
      </div>
    </div>
  </div>
   
  <div class="show-container">
    <div class="page">
      <div class="row">
  
        <div class="group grid-size-4"> <!-- email input -->
          <div class="label">Email</div>
          <div class="field border-top-primary"><?php echo e($supplier->email ?? '--'); ?></div>
        </div>
  
        <div class="group grid-size-3"> <!-- phone1 input -->
          <div class="label">Telefone 1</div>
          <div class="field border-top-primary"><?php echo e($supplier->phone1 ?? '--'); ?></div>
        </div>
  
        <div class="group grid-size-3"> <!-- phone2 input -->
          <div class="label">Telefone 2</div>
          <div class="field border-top-primary"><?php echo e($supplier->phone2 ?? '--'); ?></div>
        </div>
      </div>      
        
      <div class="row">
        <div class="group grid-size-6"></div> <!-- it pushes rg and cpf field to the right-->

        <div class="group grid-size-2"> <!-- rg input -->
          <div class="label">CNPJ/CPF</div>
          <div class="field border-top-primary"><?php echo e($supplier->CNPJ ?? '--'); ?></div>
        </div>
  
        <div class="group grid-size-2"> <!-- cpf input -->
          <div class="label">I. E.</div>
          <div class="field border-top-primary"><?php echo e($supplier->id ?? '--'); ?></div>
        </div>
      </div>

      <div class="row">
        <div class="group grid-size-6"> <!-- address -->
          <div class="label">Endereço</div>
          <div class="field border-top-primary"><?php echo e($supplier->address ?? '--'); ?></div>
        </div>
  
        <div class="group grid-size-"> <!-- address_number -->
          <div class="label">Nº </div>
          <div class="field border-top-primary"><?php echo e($supplier->address_number ?? '--'); ?></div>
        </div>
  
        <div class="group grid-size-3"> <!-- neighborhood -->
          <div class="label">Bairro</div>
          <div class="field border-top-primary"><?php echo e($supplier->neighborhood ?? '--'); ?></div>
        </div>
      </div>
  
      <div class="row">
        <div class="group grid-size-4"> <!-- city -->
          <div class="label">Cidade</div>
          <div class="field border-top-primary"><?php echo e($supplier->city ?? '--'); ?></div>
        </div>
  
        <div class="group grid-size-2"> <!-- cep -->
          <div class="label">CEP</div>
          <div class="field border-top-primary"><?php echo e($supplier->cep ?? '--'); ?></div>
        </div>

        <div class="group grid-size-4"> <!-- uf -->
          <div class="label">Estado</div>
          <div class="field border-top-primary"><?php echo e($ufs[$supplier->uf_id -1]->name ?? '--'); ?></div>
        </div>        
      </div>

      <?php if($supplier->obs): ?>
      <div class="row"> <!-- obs -->
        <div class="group grid-size-10">
          <div class="label">Observações</div>
          <div class="field border-top-primary"><?php echo e($supplier->obs); ?></div>
        </div>
      </div>   
      <?php endif; ?>

      <div class="row">
        <div class="group grid-size-4"></div>
  
        <div class="group grid-size-3"> <!-- created_at -->
          <div class="label">Cadastrado em</div>
          <div class="field border-top-primary"><?php echo e($supplier->created_at ?? '--'); ?></div>
        </div>
  
        <div class="group grid-size-3"> <!-- updated+at -->
          <div class="label">Atualizado em</div>
          <div class="field border-top-primary"><?php echo e($supplier->updated_at ?? '--'); ?></div>
        </div>
      </div>
    </div>
    
    <div class="button-field">
      <a class="btn btn-neutral" href="/suppliers">Voltar</a>
      <a class="btn btn-danger" href="/suppliers/delete/<?php echo e($supplier->id); ?>">Excluir</a>
      <a class="btn btn-primary" href="/suppliers/edit/<?php echo e($supplier->id); ?>">Editar</a>
    </div>
  </div>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\storeManager\resources\views/suppliers/showSupplier.blade.php ENDPATH**/ ?>