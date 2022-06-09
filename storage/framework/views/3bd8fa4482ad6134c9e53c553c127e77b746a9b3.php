<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php echo $__env->yieldContent('title'); ?> - Geral</title>
    <link rel="shortcut icon" href="<?php echo e(url('images/favicon.ico')); ?>" type="image/png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200">
    <div class="content mx-auto px-4 py-8">
        <?php echo $__env->yieldContent('Content'); ?>
    </div>
</body>
</html><?php /**PATH /var/www/resources/views/layouts/main.blade.php ENDPATH**/ ?>