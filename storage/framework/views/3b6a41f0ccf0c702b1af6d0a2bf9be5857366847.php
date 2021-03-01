<?php $__env->startSection('content'); ?>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="user-profile">

                <?php if($user->image): ?>
                    <div class="container-avatar">
                        <img src="<?php echo e(route('user.avatar',['filename'=> $user->image])); ?>" alt="avatar" class="avatar">
                    </div>                    
                <?php endif; ?>

                <div class="user-info">
                    <p><?php echo e('Se unio: '. \FormatTime::LongTimeFilter($user->created_at)); ?></p>
                    <h1><?php echo e('@'.$user->nick); ?></h1>
                    <h2><?php echo e($user->name. ' '. $user->surname); ?></h2>
                    <p><?php echo e($user->description); ?></p>
                </div>
            </div>
            <div class="clearfix"></div>
            <?php $__currentLoopData = $user->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('includes.image', ['i' => $i], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php if(count($user->images) == 0): ?>
                    <h1>No tiene ninguna publicacion echa</h1>
            <?php endif; ?>
        </div>

    
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravelapelo\LaravelSolo\resources\views/user/profile.blade.php ENDPATH**/ ?>