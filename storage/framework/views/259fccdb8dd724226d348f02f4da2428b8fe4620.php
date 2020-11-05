
<?php $__env->startSection('content'); ?>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">List Data</h1>
        </div>
        <div>
            
        </div>
        <div class="row">
            <div class="col-md-2 offset-md-10">
                
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Brand Mobil</th>
                    <th scope="col">Mobil</th>
                    <th scope="col">Status</th>
                    <th scope="col">Created By</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $brandmobils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brandmobil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><a href="<?php echo e(route('brandmobil.edit', $brandmobil)); ?>"><?php echo e($brandmobil->title); ?></a></td>
                        <td><?php echo e($brandmobil->description); ?></td>
                        <td><?php echo e($brandmobil->status); ?></td>
                        <td><?php echo e($brandmobil->creator->name); ?></td>
                        <td><?php echo e($brandmobil->updated_at); ?></td>
                        <td><?php echo e($brandmobil->created_at); ?></td>
                        <td>
                            <form action="<?php echo e(route('brandmobil.destroy', $brandmobil)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UTSPaul\resources\views/brandmobil/index.blade.php ENDPATH**/ ?>