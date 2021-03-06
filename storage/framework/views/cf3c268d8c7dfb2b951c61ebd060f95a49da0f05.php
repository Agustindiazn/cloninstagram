<?php $__env->startSection('content'); ?>



<div class="container">
    
    <div class="row justify-content-center">
        
        <div class="col-md-8">

            
            <div class="card">

                
                <div class="card-header">
                    Subir nueva foto
                </div>
                
                <div class="card-body">
                    
                    <form action="<?php echo e(route('image.save')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        
                        <div class="form-group row">
                            <label for="image_path" class="col-md-3 col-form-label text-md-right">Imagen</label>
                            <div class="col-md-7">

                                <input class="form-control <?php echo e($errors->has('image_path')? 'is-invalid' : ''); ?>" type="file" name="image_path" id="image_path" required>
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
                                <textarea class='<?php echo e($errors->has('description')? 'is-invalid' : ''); ?>'name="description" id="description" required >
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
                                <input type="submit" class="btn btn-primary" value="Subir imagen">
                            </div>
                        </div>

                    </form>
                </div>

            </div>
     
        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravelapelo\LaravelSolo\resources\views/image/create.blade.php ENDPATH**/ ?>