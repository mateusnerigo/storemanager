<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title><?php echo $__env->yieldContent('title'); ?></title>

  <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/buttons.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/forms.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/nav.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/tables.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/data.css')); ?>">
</head>
<body class="app">
   <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.navbar','data' => []]); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withName('navbar'); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
  <div class="content">
    <?php if (! empty(trim($__env->yieldContent('content')))): ?>
        <?php echo $__env->yieldContent('content'); ?>
    <?php endif; ?>
  </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\storeManager\resources\views/layouts/app.blade.php ENDPATH**/ ?>