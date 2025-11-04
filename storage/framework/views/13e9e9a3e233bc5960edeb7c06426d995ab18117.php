

<?php $__env->startSection('content'); ?>
    <h3>Marks List</h3>

    <a href="<?php echo e(route('marks.create')); ?>" class="btn btn-primary mb-3">Add Marks</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student</th>
                <th>Subject</th>
                <th>Marks</th>
                <th>Exam Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $marks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mark): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($mark->id); ?></td>
                    <td><?php echo e($mark->student->name ?? 'N/A'); ?></td>
                    <td><?php echo e($mark->subject); ?></td>
                    <td><?php echo e($mark->marks); ?></td>
                    <td><?php echo e($mark->exam_date); ?></td>
                    <td>
                        <a href="<?php echo e(route('marks.edit', $mark->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <form action="<?php echo e(route('marks.destroy', $mark->id)); ?>" method="POST" style="display:inline;">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Tanish\sms\resources\views/marks/index.blade.php ENDPATH**/ ?>