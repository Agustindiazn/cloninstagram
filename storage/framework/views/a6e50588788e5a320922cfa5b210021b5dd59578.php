<?php $__env->startSection('content'); ?>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-8">
                <h1>Likes mios</h1>
                <hr>
                <?php $__currentLoopData = $likes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make('includes.image', ['i' => $l->image], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                <div class="clearfix">
                    <?php echo e($likes->links()); ?>

                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravelapelo\LaravelSolo\resources\views/likes/likes.blade.php ENDPATH**/ ?>