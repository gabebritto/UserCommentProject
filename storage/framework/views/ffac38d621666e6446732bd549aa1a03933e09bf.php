<?php echo csrf_field(); ?>
<input type="text" name="name" placeholder="Nome:" value="<?php echo e($user->name ?? old('name')); ?>">
<input type="email" name="email" placeholder="Email:" value="<?php echo e($user->email ?? old('email')); ?>">
<input type="password" name="password" placeholder="Password:">
<button type="submit">Salvar</button><?php /**PATH /var/www/resources/views/users/_partials/form.blade.php ENDPATH**/ ?>