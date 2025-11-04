
<?php $__env->startSection('content'); ?>
<h3>Add Marks</h3>
<form method="POST" action="<?php echo e(route('marks.store')); ?>"><?php echo csrf_field(); ?>
<div class="mb-3"><label>Student</label><select name="student_id" class="form-control"><?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><option value="<?php echo e($s->id); ?>"><?php echo e($s->name); ?></option><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></select></div>
<div class="mb-3"><label>Subject</label><input name="subject" class="form-control"></div>
<div class="mb-3"><label>Marks Obtained</label><input name="marks_obtained" type="number" class="form-control"></div>
<div class="mb-3"><label>Max Marks</label><input name="max_marks" type="number" class="form-control" value="100"></div>
<button class="btn btn-primary">Save</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Tanish\sms\resources\views/marks/create.blade.php ENDPATH**/ ?>