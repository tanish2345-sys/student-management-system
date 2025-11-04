
<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-3">
<h3>Students</h3>
<a href="<?php echo e(route('students.create')); ?>" class="btn btn-primary">Add Student</a>
</div>
<table class="table table-striped">
<thead><tr><th>#</th><th>Name</th><th>Roll No</th><th>Class</th><th>Actions</th></tr></thead>
<tbody>
<?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($s->id); ?></td>
<td><a href="<?php echo e(route('students.show',$s)); ?>"><?php echo e($s->name); ?></a></td>
<td><?php echo e($s->roll_no); ?></td>
<td><?php echo e($s->class); ?></td>
<td>
<a href="<?php echo e(route('students.edit',$s)); ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
<form action="<?php echo e(route('students.destroy',$s)); ?>" method="POST" style="display:inline-block" onsubmit="return confirm('Delete?')">
<?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
<button class="btn btn-sm btn-danger">Delete</button>
</form>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
<?php echo e($students->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Tanish\sms\resources\views/students/index.blade.php ENDPATH**/ ?>