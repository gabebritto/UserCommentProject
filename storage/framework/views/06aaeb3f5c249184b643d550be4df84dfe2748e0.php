<?php if($errors->any()): ?>
    <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4">
        <ul class="errors">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="error"><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?><?php /**PATH /var/www/resources/views/includes/validations-form.blade.php ENDPATH**/ ?>