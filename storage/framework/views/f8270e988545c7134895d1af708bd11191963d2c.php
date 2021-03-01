<?php $__env->startSection('content'); ?>



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                
                <?php if(session('message')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('message')); ?>

                    </div>
                <?php endif; ?>
                <h2>Gente</h2>
                <form action="GET" action="<?php echo e(route('user.users')); ?>" id='buscador'>
                    <div class="row">
                        <div class="form-group col">
                            <input type="text" id='search' class="form-control">
                        </div>
                        <div class="form-group col btn-search">
                            <input type="submit" value="Buscar" class="btn btn-success">
                        </div>
                    </div>
                </form>

                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="user-profile">

                        <?php if($user->image): ?>
                            <div class="container-avatar">
                                <img src="<?php echo e(route('user.avatar', ['filename' => $user->image])); ?>" alt="avatar"
                                    class="avatar">
                            </div>
                        <?php endif; ?>

                        <div class="user-info">
                            <p><?php echo e('Se unio: ' . \FormatTime::LongTimeFilter($user->created_at)); ?></p>
                            <h2><?php echo e('@' . $user->nick); ?></h1>
                            <h3><?php echo e($user->name . ' ' . $user->surname); ?></h2>
                            <a href="<?php echo e(route('user.profile',['id' => $user->id])); ?>" class="btn btn-success">Ir al perfil</a>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                    </div>


                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                <div class="clearfix">
                    <?php echo e($users->links()); ?>

                </div>
            </div>


        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravelapelo\LaravelSolo\resources\views/user/users.blade.php ENDPATH**/ ?>