<?php if($i): ?>
    <div class="card pub_image">
        <div class="card-header">

            <?php if($i->user->image): ?>
                <div class="container-avatar">
                    <img src="<?php echo e(route('user.avatar', ['filename' => $i->user->image])); ?>" alt="">
                </div>
            <?php endif; ?>

            <div class="data-user">
                <a href="<?php echo e(route('user.profile', ['id' => $i->user->id])); ?>">
                    <?php echo e($i->user->name . ' ' . $i->user->surname); ?>

                    <span class="nick_name">
                        <?php echo e(' | @' . $i->user->nick); ?>

                    </span>
                </a>
            </div>

        </div>

        <div class="card-body">
            <div class="image-container">
                <a href="<?php echo e(route('image.detail', ['id' => $i->id])); ?>">
                    <img src="<?php echo e(route('image.get', ['filename' => $i->image_path])); ?>" alt="">
                </a>
            </div>

            <div class="description">
                <span class="nick_name"><?php echo e($i->user->nick); ?></span>
                <span class="nick_name date"><?php echo e(' | ' . \FormatTime::LongTimeFilter($i->created_at)); ?></span>
                <p><?php echo e($i->description); ?></p>
            </div>

            <div class="likes">

                
                <?php $user_like = false; ?>
                <?php $__currentLoopData = $i->likes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $like): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($like->user->id == Auth::User()->id): ?>
                        <?php $user_like = true; ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                <?php if($user_like): ?>
                    <img src="<?php echo e(asset('img/heart-red.png')); ?>" data-id="<?php echo e($i->id); ?>" alt="disLike"
                        class="btn-dislike">
                <?php else: ?>
                    <img src="<?php echo e(asset('img/heart-grey.png')); ?>" data-id="<?php echo e($i->id); ?>" alt="Like"
                        class="btn-like">
                <?php endif; ?>

                <span class="number_likes"><?php echo e(count($i->likes)); ?></span>

            </div>

            <div class="comments">
                <a href="<?php echo e(route('image.detail', ['id' => $i->id])); ?>" class="btn btn-sm btn-warning btn-coments">
                    Comentarios (<?php echo e(count($i->comments)); ?>)
                </a>
            </div>

        </div>
    </div>
<?php endif; ?>
<?php /**PATH C:\wamp64\www\laravelapelo\LaravelSolo\resources\views/includes/image.blade.php ENDPATH**/ ?>