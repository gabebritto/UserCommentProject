<?php $__env->startSection('title', 'Criar usuário'); ?>

<?php $__env->startSection('Content'); ?>
<h1 class="text-2x1 font-semibold leading-tigh py-2">Cadastrar Usuário</h1>
<?php echo $__env->make('includes.validations-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <form action="<?php echo e(route('users.store')); ?>" method="post" enctype="multipart/form-data">
        <?php echo $__env->make('users._partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>

    <div class="py-4">
        <a href="<?php echo e(route('users.index')); ?>" class="shadow bg-blue-500 hover:bg-orange-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Inicio</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/users/create.blade.php ENDPATH**/ ?>