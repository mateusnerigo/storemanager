<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="<?php echo e(asset('img/store_manager_ico.png')); ?>" type="image/png">

    <title>Store Manager - v0.01</title>

    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
</head>
<body class="login">
    <div class="container">  
        <form action="/login" class="login-form" method="POST">
            <?php echo csrf_field(); ?>
            <div class="login-header">
                <span class="title">Login</span>
            </div>
            
            <div class="login-body">
                <div class="login-input-group">
                    <input type="text" name="username" id="username" class="login-input <?php echo e($errors->has('username') ? 'invalid-input' : ''); ?>" placeholder="Usuário" autocomplete="off">
                    <div class="invalid-msg">
                        <?php if($errors->has('username')): ?>
                        <?php echo e($errors->first('username')); ?>

                        <?php endif; ?>
                    </div>
                </div>
                <div class="login-input-group">
                    <input type="password" name="password" id="password" class="login-input <?php echo e($errors->has('password') ? 'invalid-input' : ''); ?>" placeholder="Senha">
                    <div class="invalid-msg">
                        <?php if($errors->has('password')): ?>
                        <?php echo e($errors->first('password')); ?>

                        <?php endif; ?>
                        
                    </div>
                </div>
                <?php if(isset($wrong_credentials)): ?> 
                    <div class="problem">
                    <?php echo e($wrong_credentials); ?>

                    </div>
                    <?php endif; ?>
            </div>

            <div class="login-footer">
                <button class="login-button">Entrar</button>
            </div>
        </form>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\storeManager\resources\views/login.blade.php ENDPATH**/ ?>