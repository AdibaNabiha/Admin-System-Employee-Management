<?php if(session()->has('user')): ?>
    <?php echo e(View::make('title')); ?>

    <?php echo e(View::make('index')); ?>

    <?php echo e(View::make('footer')); ?>

<?php else: ?>
    <?php echo $__env->yieldContent('login'); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\final-project\resources\views/header.blade.php ENDPATH**/ ?>