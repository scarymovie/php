<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php $__env->startSection('title'); ?> Страница <?php echo $__env->yieldSection(); ?></title>
</head>
<body>
<div class="header">
    <?php echo $__env->make('blocks.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<div class="content">
    <?php echo $__env->yieldContent('content'); ?>
</div>
<div class="footer">
    This is footer
</div>
</body>
</html>
<?php /**PATH C:\OSPanel\domains\lara.local\resources\views/layouts/main.blade.php ENDPATH**/ ?>