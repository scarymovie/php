

<?php $__env->startSection('title'); ?>
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
    Новость
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <?php $__empty_1 = true; $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <?php
            $url = route('news::content', ['ContentId' => $id])
        ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        Новостей нет
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\lara.local\resources\views/news/CardNews.blade.php ENDPATH**/ ?>