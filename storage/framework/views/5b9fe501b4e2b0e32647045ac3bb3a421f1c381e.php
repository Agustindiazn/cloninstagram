<?php $__env->startSection('content'); ?>

<h1>Editar Img</h1>

<div class="container">
    
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            
            <?php if(session('message')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('message')); ?>

                </div>
            <?php endif; ?>

            
            <div class="card">

                
                <div class="card-header">
                    Editar foto
                </div>
                
                <div class="card-body">
                    
                    <form action="<?php echo e(route('image.update')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="imagen_id" value="<?php echo e($image->id); ?>" />

                        
                        <div class="form-group row">
                            <label for="image_path" class="col-md-2 col-form-label text-md-right">Imagen:</label>

                            <div class="image-container image-detail pb-3">
                                <img src="<?php echo e(route('image.get',['filename'=> $image->image_path] )); ?>" alt="">
                            </div>

                            <div class="col-md-7">

                                <input class="form-control <?php echo e($errors->has('image_path')? 'is-invalid' : ''); ?>" type="file" name="image_path" id="image_path">
                                <?php if ($errors->has('image_path')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('image_path'); ?>
                                    <div class="alert alert-danger mt-3"> <?php echo e($errors->first('image_path')); ?></div>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div> 
                        </div>
                        
                        <div class="form-group row">
                            <label for="description" class="col-md-3 col-form-label text-md-right">Descripcion</label>
                            <div class="col-md-7">
                                <textarea class=' <?php echo e($errors->has('description')? 'is-invalid' : ''); ?>'name="description" id="description" required >
                                    <?php echo e($image->description); ?>

                                </textarea>
                                <?php if ($errors->has('description')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('description'); ?>
                                    <div class="alert alert-danger mt-3"> <?php echo e($errors->first('description')); ?></div>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <input type="submit" class="btn btn-primary" value="Actualizar imagen">
                            </div>
                        </div>

                    </form>
                </div>

            </div>
     
        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravelapelo\LaravelSolo\resources\views/image/edit.blade.php ENDPATH**/ ?>