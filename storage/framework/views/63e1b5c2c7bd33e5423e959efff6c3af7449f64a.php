
<?php $__env->startSection('title', 'Usuários do Sistema'); ?>
<?php $__env->startSection('content'); ?>
    
<div class="table-page">
  
  <div class="page-title-container">
    <div class="page-icon">
      <img src="<?php echo e(asset('img/users.png')); ?>" alt="-">
    </div>

    <div class="page-text">
      <div class="page-title">Todos os Usuários</div>
      <div class="page-description">Visualize todos os usuários cadastrados no sistema</div>
    </div>
  </div>
  
  <div class="table-container">
    <table>
      <thead>
        <th>Nome</th>
        <th>Usuário</th>
        <th>Tipo de Acesso</th>
        <th>Situação</th>
        <th></th>
      </thead>
      <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($user->name); ?></td>
          <td><?php echo e($user->username); ?></td>
          <td><?php echo e(($user->is_admin) ? 'Administrador' : 'Geral'); ?></td>
          <td><?php echo e(($user->is_active) ? 'Ativo' : 'Inativo'); ?></td>
          <td>
            <a href="/users/<?php echo e($user->id); ?>">Visualizar</a>
          </td>
        </tr>
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
  
  <a class="btn btn-primary" href="/users/create">
    Novo Usuário
  </a>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\storeManager\resources\views/users/users.blade.php ENDPATH**/ ?>