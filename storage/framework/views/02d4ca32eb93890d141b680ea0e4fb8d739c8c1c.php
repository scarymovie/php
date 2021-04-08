<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
        $url = route('news::list', ['categoryId' => $id])
    ?>

<div>
    <a href="<?php echo e($url); ?>"><?php echo e($name); ?></a>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\OSPanel\domains\lara.local\resources\views/news/index.blade.php ENDPATH**/ ?>