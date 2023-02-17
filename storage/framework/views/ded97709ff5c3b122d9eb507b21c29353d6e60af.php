<?php if($message = Session::get('success')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
<i class="bi bi-check-circle me-1"></i>
<?php echo e($message); ?>

<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>


<?php if($message = Session::get('error')): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
<i class="bi bi-exclamation-octagon me-1"></i>
<?php echo e($message); ?>

<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>


<?php /**PATH C:\xampp\htdocs\final-project\resources\views/flashmessage.blade.php ENDPATH**/ ?>