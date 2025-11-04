

<?php $__env->startSection('content'); ?>
    <h3>Attendance List</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student</th>
                <th>Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $attendances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attendance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($attendance->id); ?></td>
                    <td><?php echo e($attendance->student->name ?? 'N/A'); ?></td>
                    <td><?php echo e($attendance->date); ?></td>
                    <td><?php echo e($attendance->status); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Tanish\sms\resources\views/attendances/index.blade.php ENDPATH**/ ?>