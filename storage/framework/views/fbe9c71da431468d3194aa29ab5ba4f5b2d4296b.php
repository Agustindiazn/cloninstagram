
<?php if(Auth::user()->image): ?>
<div class="container-avatar">
    <img src="<?php echo e(route('user.avatar', Auth::user()->image)); ?>" class="avatar" >
</div>
<?php endif; ?><?php /**PATH C:\wamp64\www\laravelapelo\LaravelSolo\resources\views/includes/avatar.blade.php ENDPATH**/ ?>