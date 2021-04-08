<div class="menu">
    <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>
            <a href="<?php echo e(route($item['alias'])); ?>">
                <?php echo e($item['title']); ?>

            </a>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<hr>

<?php /**PATH C:\OSPanel\domains\lara.local\resources\views/blocks/menu.blade.php ENDPATH**/ ?>