<li>
    <a href="javascript:void(0);" class="container-refresh">
        <i class="fa fa-refresh"></i>
    </a>
</li>
<script>
    $('.container-refresh').off('click').on('click', function() {
        $.admin.reload();
        $.admin.toastr.success('<?php echo e(__('admin.refresh_succeeded'), false); ?>', '', {positionClass:"toast-top-center"});
    });
</script>
<?php /**PATH /Users/ahmeddastagir/Documents/Patreons code/shop-app-commercial-v2/shop_app_backend/vendor/encore/laravel-admin/src/../resources/views/components/refresh-btn.blade.php ENDPATH**/ ?>