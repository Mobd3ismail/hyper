<div class="row">
    <div class="col-md-12">
        <?php echo $panel; ?>

    </div>

    <div class="col-md-12">
        <?php $__currentLoopData = $relations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $relation->render(); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div><?php /**PATH /Users/ahmeddastagir/Documents/Patreons code/shop-app-commercial-v2/shop_app_backend/vendor/encore/laravel-admin/src/../resources/views/show.blade.php ENDPATH**/ ?>