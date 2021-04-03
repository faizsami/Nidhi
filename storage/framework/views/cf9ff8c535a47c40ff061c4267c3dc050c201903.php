<?php if(Session::has('success')): ?>

    <script>
        // On load Toast

        setTimeout(function () {
        toastr['success'](
        '<?php echo e(Session::get("success")); ?>',
        'Successfully.!',
        {
            closeButton: true,
            tapToDismiss: true
        }
        );
    },  100);
    </script>
    <?php echo e(Session::forget('success')); ?>

<?php endif; ?>
<?php if(Session::has('error')): ?>
    <script>
        // On load Toast
        setTimeout(function () {
        toastr['error'](
        '<?php echo e(Session::get("error")); ?>',
        'Error.!',
        {
            closeButton: true,
            tapToDismiss: true
        }
        );
    }, 100);
    </script>
    <?php echo e(Session::forget('error')); ?>

<?php endif; ?>
<?php /**PATH E:\Laravel\Nidhi\resources\views/layouts/response.blade.php ENDPATH**/ ?>