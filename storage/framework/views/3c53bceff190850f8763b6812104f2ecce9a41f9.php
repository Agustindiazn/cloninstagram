<?php $__env->startSection('content'); ?>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            
            <?php if(session('message')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('message')); ?>

                </div>
            <?php endif; ?>
                 
                <?php if($image): ?>
                    <div class="card pub_image pub_image_detail">
                        <div class="card-header">

                            <?php if($image->user->image): ?>
                                <div class="container-avatar">
                                    <img src="<?php echo e(route('user.avatar',['filename' => $image->user->image])); ?>" alt="">
                                </div>
                            <?php endif; ?>

                            <div class="data-user">
                                <a href="<?php echo e(route('user.profile', ['id' => $image->user->id])); ?>">
                                    <?php echo e($image->user->name.' '. $image->user->surname); ?>

                                    <span class="nick_name">
                                        <?php echo e(' | @'.$image->user->nick); ?>

                                    </span>
                                </a>
                            </div>

                        </div>

                        <div class="card-body">
                            <div class="image-container image-detail">
                                <img src="<?php echo e(route('image.get',['filename'=> $image->image_path] )); ?>" alt="">
                            </div>
                            
                            <div class="description">
                                <span class="nick_name"><?php echo e($image->user->nick); ?></span>
                                <p><?php echo e($image->description); ?></p>
                            </div>
                            <div class="likes">
                                
                                
                                <?php $user_like = false; ?>
                                
                                <?php $__currentLoopData = $image->likes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $like): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($like->user->id == Auth::User()->id): ?>
                                        <?php $user_like = true ; ?>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                                <?php if($user_like): ?>
                                    <img src="<?php echo e(asset('img/heart-red.png')); ?>" data-id="<?php echo e($image->id); ?>" alt="disLike" class="btn-dislike">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('img/heart-grey.png')); ?>" data-id="<?php echo e($image->id); ?>" alt="Like" class="btn-like">
                                <?php endif; ?>

                                <span class="number_likes"><?php echo e(count($image->likes)); ?></span>

                            </div>

                            <?php if(Auth::user() && Auth::user()->id == $image->user->id): ?> 
                                <div class="actions">
                                    <a href="<?php echo e(route('image.edit', ['id' => $image->id])); ?>" class="btn btn-sm btn-primary">editar</a>
                                    

                                    <!-- Trigger the modal with a button -->
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">Eliminar</button>

                                    <!-- Modal -->
                                    <div id="myModal" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">¡Eliminar!</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Si la eliminas nunca podras recuperarla</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                    <a href="<?php echo e(route('image.delete',['id' => $image->id])); ?>" class="btn btn-sm btn-danger">Borrar definidamente</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="clearfix"></div>
                            <div class="comments">
                                <h2>Comentarios (<?php echo e(count($image->comments)); ?>)</h2>
                                <hr>
                                <form action="<?php echo e(route('comment.save')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="image_id" value="<?php echo e($image->id); ?>">

                                    <p>
                                        <textarea class="form-control <?php echo e($errors->has('content') ? 'is_invalid' : ''); ?>  " name='content' ></textarea>
                                        <?php if ($errors->has('content')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('content'); ?>
                                            <div class="alert alert-danger mt-3"> <?php echo e($errors->first('content')); ?></div>
                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </p>

                                    <button type="submit" class="btn btn-success">Comentar</button>

                                </form>
                                <?php $__currentLoopData = $image->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <hr>
                                <div class="comment">
                                    <span class="nick_name"><?php echo e($x->user->nick); ?></span>
                                    <span class="nick_name date"><?php echo e(' | '.\FormatTime::LongTimeFilter($x->created_at)); ?></span>
                                    <p>
                                        <?php echo e($x->content); ?>

                                        <br>
                                        <?php if(Auth::check() && ($x->user_id == Auth::user()->id || $x->image->user_id==Auth::user()->id) ): ?>    
                                        <a href="<?php echo e(route('comment.delete', ['id' => $x->id])); ?>" class="btn btn-sm btn-danger">
                                            Eliminar
                                        </a>
                                        <?php endif; ?>
                                    </p>

                                    
                                </div>
                                    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
           
          
        </div>

    
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravelapelo\LaravelSolo\resources\views/image/detail.blade.php ENDPATH**/ ?>