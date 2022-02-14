<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <div class="container-fluid">
    <div class="row mb-5">
        <div class="col-md-6 col-lg-3 col-xlg-3">
            <div class="card card-hover">
                <div class="box text-center" style="background-color:blue">
                <h1 class="font-light text-light">
                <i class="mdi mdi-account"></i>
                </h1>
                    <p class="font-light text-white">
                        <?php echo e($pupils); ?>

                  </p>
                    <h6 class="text-white">Total Pupils</h6>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xlg-3">
            <div class="card card-hover">
                <div class="box text-center" style="background-color:blue">
                <h1 class="font-light text-light">
                <i class="mdi mdi-account"></i>
                </h1>
                    <p class="font-light text-white">
                        <?php echo e($activePupils); ?>

</p>
                    <h6 class="text-white">Active Pupils</h6>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 col-xlg-3">
            <div class="card card-hover">
                <div class="box text-center" style="background-color:blue">
                <h1 class="font-light text-light">
                <i class="mdi mdi-account"></i>
                </h1>
                    <p class="font-light text-white">
                        <?php echo e($deactivePupils); ?>

</p>
                    <h6 class="text-white">Deactivated Pupils</h6>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6 col-lg-3 col-xlg-3">
            <div class="card card-hover">
                <div class="box text-center" style="background-color:blue">
                <h1 class="font-light text-light">
                <i class="mdi mdi-book-open-variant"></i>
                </h1>
                    <p class="font-light text-white">
                        <?php echo e($assignments); ?>

</p>
                    <h6 class="text-white">Total Assignments</h6>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xlg-3">
            <div class="card card-hover">
                <div class="box text-center" style="background-color:blue">
                <h1 class="font-light text-light">
                <i class="mdi mdi-book-open-variant"></i>
                </h1>
                    <p class="font-light text-white">
                        <?php echo e($notYetDeadline); ?>

</p>
                    <h6 class="text-white">Due Assignments</h6>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 col-xlg-3">
            <div class="card card-hover">
                <div class="box text-center" style="background-color:blue">
                <h1 class="font-light text-light">
                <i class="mdi mdi-book-open-variant"></i>
                </h1>
                    <p class="font-light text-white">
                        <?php echo e($overdue); ?>

</p>
                    <h6 class="text-white">Over Due</h6>
                </div>
            </div>
        </div>
        </div>
    </div>
    
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lovis/Music/Kindercare/mywork-kindercare/resources/views/admin/dashboard/index.blade.php ENDPATH**/ ?>