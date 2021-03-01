<?php $__env->startSection('content'); ?>

<h1>Configuracion de la cuenta</h1>

<div class="container">
    
    <div class="row justify-content-center">
        
        <div class="col-md-8">

        
        <?php if(session('message')): ?>
            <div class="alert alert-success">
                <?php echo e(session('message')); ?>

            </div>
        <?php endif; ?>
        
        <div class="card">

            <div class="card-header">Configuracion</div>

            <div class="card-body">
                <form action="<?php echo e(route('user.update')); ?>" enctype="multipart/form-data"  method="POST">

                    <?php echo csrf_field(); ?>
                    
                    
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Name')); ?></label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name" value="<?php echo e(Auth::user()->name); ?>" required autocomplete="name" autofocus>

                            <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                    </div>

                    
                    <div class="form-group row">
                        <label for="surname" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Surname')); ?></label>

                        <div class="col-md-6">
                            
                            <input id="surname" type="text" class="form-control 
                            <?php if ($errors->has('surname')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('surname'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="surname" value="<?php echo e(Auth::user()->surname); ?>" 
                            required autocomplete="surname" autofocus>

                            <?php if ($errors->has('surname')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('surname'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                    </div>

                    
                    <div class="form-group row">
                        <label for="nick" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nick')); ?></label>

                        <div class="col-md-6">
                            <input id="nick" type="text" class="form-control <?php if ($errors->has('nick')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nick'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="nick" value="<?php echo e(Auth::user()->nick); ?>" required autocomplete="nick" autofocus>

                            <?php if ($errors->has('nick')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nick'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                    </div>

                    
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(Auth::user()->email); ?>" required autocomplete="email">

                            <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                    </div>

                    
                    
                    
                    <div class="form-group row">
                        <label for="image_path" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Avatar')); ?></label>
                        <div class="col-md-6">

                            
                           <?php echo $__env->make('includes.avatar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    
                            <input id='image_path' type="file" class="form-control <?php if ($errors->has('image_path')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('image_path'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name='image_path'>
                            <?php if($errors->has('image_path')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Guardar cambios
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravelapelo\LaravelSolo\resources\views/user/config.blade.php ENDPATH**/ ?>