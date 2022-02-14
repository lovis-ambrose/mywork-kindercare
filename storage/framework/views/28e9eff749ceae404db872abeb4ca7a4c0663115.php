<style>
    .button1{
        background-color: lightseagreen;
        color: white;
        height: 34px;
        width: 75px;
        border-radius: 15px;
        border-color: green;
        shadow: none;
        font-weight: bold;
    }
    .button2{
        background-color: mediumseagreen;
        color: white;
        height: 34px;
        width: 75px;
        border-radius: 15px;
        border-color: green;
        shadow: none;
        font-weight: bold;
    }
    .button3{
        background-color: seagreen;
        color: white;
        height: 34px;
        width: 85px;
        border-radius: 15px;
        border-color: green;
        shadow: none;
        font-weight: bold;
    }
    .button4{
        background-color: lightseagreen;
        color: white;
        height: 40px;
        width: 100px;
        border-radius: 5px;
        border-color: lightseagreen;
        shadow: none;
        font-weight: bold
    }
</style>
<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <div class="row">
      <div class="col-sm-12">
                <div class="card">
                    <div class="card-header bg-primary text-light">Pupil</div>
                    <div class="card-body">
                        <a href="<?php echo e(url('/admin/pupil/create')); ?>" class="btn btn-primary btn-sm" title="Add New pupil">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="<?php echo e(url('/admin/pupil')); ?>" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="<?php echo e(request('search')); ?>">
                                <span style="margin-left:5px">
                                    <button class="btn btn-primary" type="submit" style="height:34px">
                                        Search
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>User Code</th><th>First Name</th><th>Last Name</th><th>Phone Number</th><th>Status</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $pupil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->user_code); ?></td>
                                        <td><?php echo e($item->first_name); ?></td>
                                        <td><?php echo e($item->last_name); ?></td>
                                        <td><?php echo e($item->phone_number); ?></td>
                                        <?php if($item->status==True): ?>
                                        <td>
                                        <form action="/activate/<?php echo e($item->id); ?>" method="post">
                                        <?php echo e(method_field('PATCH')); ?>

                                              <?php echo e(csrf_field()); ?>

                                              <button type="submit" title="Deactivate the student" style="border:0px; font-size: 15px;color:green;">Active</button>
                                        </form>
                                    </td>
                                        <?php else: ?>
                                        <td style="color:red;font-weight:bold;">
                                        <form action="/activate/<?php echo e($item->id); ?>" method="post">
                                        <?php echo e(method_field('PATCH')); ?>

                                              <?php echo e(csrf_field()); ?>

                                              <button type="submit" title="Activate the student" style="border:0px; font-size: 15px;color:red;">Deactive</button>
                                        </form>
                                    </td>
                                        <?php endif; ?>
                                        <td>
                                            <a href="<?php echo e(url('/admin/pupil/' . $item->id)); ?>" title="View pupil"><button class="button2"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="<?php echo e(url('/admin/pupil/' . $item->id . '/edit')); ?>" title="Edit pupil"><button class="button1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> <?php echo $pupil->appends(['search' => Request::get('search')])->render(); ?> </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lovis/Music/Kindercare/mywork-kindercare/resources/views/admin/pupils/index.blade.php ENDPATH**/ ?>