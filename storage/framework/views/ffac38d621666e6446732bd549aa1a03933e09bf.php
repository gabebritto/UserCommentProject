<div class="w-full bg-white shadow-md rounded px-8 py-12">
    <?php echo csrf_field(); ?>
    <input type="text" name="name" placeholder="Nome:" value="<?php echo e($user->name ?? old('name')); ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <input type="email" name="email" placeholder="Email:" value="<?php echo e($user->email ?? old('email')); ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <input type="password" name="password" placeholder="Password:" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <input type="file" name="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <button type="submit" class="shadow bg-blue-500 hover:bg-orange-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Salvar</button>
</div>
<?php /**PATH /var/www/resources/views/users/_partials/form.blade.php ENDPATH**/ ?>