

<?php $__env->startSection('title',  'Listagem do Usuário'); ?>


<?php $__env->startSection('Content'); ?>
<h1>Listar usuário <?php echo e($user->name); ?></h1>

    <ul>
        <li> <?php echo e($user->name); ?> </li>
        <li> <?php echo e($user->email); ?> </li>
    </ul>

    <a href="<?php echo e(route('users.index')); ?>">Inicio</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/users/show.blade.php ENDPATH**/ ?>