<?php $__env->startSection('title'); ?>
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
    Список новостей
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__empty_1 = true; $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <?php
            $url = route('news::card', ['id' => $id])
        ?>

        <div>
            <a href="<?php echo e($url); ?>"><?php echo e($item['title']); ?></a>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        Новостей нет
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php dump($news); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\lara.local\resources\views/news/list.blade.php ENDPATH**/ ?>