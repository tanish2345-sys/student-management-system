

<?php $__env->startSection('content'); ?>
    <h3>Fees Records</h3>

    <a href="<?php echo e(route('fees.create')); ?>" class="btn btn-primary mb-3">Add Fee Record</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Payment Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $fees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($fee->id); ?></td>
                    <td><?php echo e($fee->student->name ?? 'N/A'); ?></td>
                    <td><?php echo e($fee->amount); ?></td>
                    <td>
                        <?php if($fee->status == 'paid'): ?>
                            <span class="badge bg-success">Paid</span>
                        <?php else: ?>
                            <span class="badge bg-danger">Pending</span>
                        <?php endif; ?>
                    </td>
                    <td><?php echo e($fee->payment_date); ?></td>
                    <td>
                        <a href="<?php echo e(route('fees.edit', $fee->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <form action="<?php echo e(route('fees.destroy', $fee->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this record?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Tanish\sms\resources\views/fees/index.blade.php ENDPATH**/ ?>