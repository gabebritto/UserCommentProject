

<?php $__env->startSection('title',  'Listagem do Usuário'); ?>


<?php $__env->startSection('Content'); ?>
<h1 class="text-2x1 font-semibold leading-tigh py-2">Listar usuário <?php echo e($user->name); ?></h1>

    <ul class="my-10">
        <li> <?php echo e($user->name); ?> </li>
        <li> <?php echo e($user->email); ?> </li>
    </ul>

    <a href="<?php echo e(route('users.index')); ?>" class="shadow bg-blue-500 hover:bg-orange-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Inicio</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/users/show.blade.php ENDPATH**/ ?>