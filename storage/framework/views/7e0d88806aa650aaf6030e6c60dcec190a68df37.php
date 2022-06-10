<?php $__env->startSection('title', 'Listagem de Usuários'); ?>

<?php $__env->startSection('Content'); ?>
    <h1 class="text-2x1 font-semibold leading-tigh py-2">Lista de Usuários
        <a href="<?php echo e(route('users.create')); ?>" class="bg-blue-900 text-white px-4 rounded-full text-sm">+</a>
    </h1>

    <form action="<?php echo e(route('users.index')); ?>" method="get" class="py-5">
        <input type="text" name="search" placeholder="Pesquisar:" class="md:w-2/6 bg-blue-50 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4">
        <button class="shadow bg-blue-500 hover:bg-orange-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Pesquisar</button>
    </form>

    <table class="min-w-full">
        <thead>
            <tr>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider rounded">Nome</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider rounded">Email</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider rounded">Editar</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider rounded">Detalhes</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider rounded">Comentários</th>
            </tr>
        </thead>
    
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <?php echo e($user->name); ?>

                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><?php echo e($user->email); ?></td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><a href="<?php echo e(route('users.edit', ['id' => $user->id])); ?>" class="bg-green-300 rounded-full py-2 px-6">Edit</a></td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><a href=" <?php echo e(route('users.show', ['id' => $user->id])); ?>" class="bg-green-300 rounded-full py-2 px-6">Details</a></td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><a href=" <?php echo e(route('comments.index', ['id' => $user->id])); ?>" class="bg-green-300 rounded-full py-2 px-6">Comentários (0)</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/users/index.blade.php ENDPATH**/ ?>