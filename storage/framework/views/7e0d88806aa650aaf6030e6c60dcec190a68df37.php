

<?php $__env->startSection('title', 'Listagem de Usuários'); ?>

<?php $__env->startSection('Content'); ?>
    <h1>Lista de Usuários
        (<a href="<?php echo e(route('users.create')); ?>">+</a>)
    </h1>

    <form action="<?php echo e(route('users.index')); ?>" method="get">
        <input type="text" name="search" placeholder="Pesquisar:">
        <button>Pesquisar</button>
    </form>

    <ul>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <?php echo e($user->name); ?> - <?php echo e($user->email); ?>

                <a href="<?php echo e(route('users.edit', ['id' => $user->id])); ?>">Edit</a>| <a href=" <?php echo e(route('users.show', ['id' => $user->id])); ?>">Details</a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/users/index.blade.php ENDPATH**/ ?>