<?php $__env->startSection('title',  'Listagem do Usuário'); ?>


<?php $__env->startSection('Content'); ?>
<h1 class="text-2x1 font-semibold leading-tigh py-2">Listar usuário <?php echo e($user->name); ?></h1>

<table class="min-w-full">
    <thead>
        <tr>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider rounded">Foto</th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider rounded">Nome</th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider rounded">Email</th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider rounded">Deletar</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <?php if($user->image): ?>
                    <img src="<?php echo e(url("storage/{$user->image}")); ?>" alt="User_Image" class="object-cover w-20">
                <?php else: ?>
                    <img src="<?php echo e(url("images/UserDefault.webp")); ?>" alt="Default_Image" class="object-cover w-20">                        
                <?php endif; ?>
            </td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><?php echo e($user->name); ?></td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><?php echo e($user->email); ?></td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <form action="<?php echo e(route('users.destroy', $user->id)); ?>" method="post" class="inline">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="shadow bg-red-500 hover:bg-orange-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Delete</button>
                </form>
            </td>
        </tr>
    </tbody>
</table>
    <div class="py-4">
        <a href="<?php echo e(route('users.index')); ?>" class="shadow bg-blue-500 hover:bg-orange-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Inicio</a>
    </div>
    
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/users/show.blade.php ENDPATH**/ ?>