

<?php $__env->startSection('title', 'Criar usuário'); ?>

<?php $__env->startSection('Content'); ?>
<h1>Cadastrar Usuário</h1>
<?php echo $__env->make('includes.validations-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <form action="<?php echo e(route('users.store')); ?>" method="post">
        <?php echo $__env->make('users._partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/users/create.blade.php ENDPATH**/ ?>