
<?php $__env->startSection('content'); ?>
<h3>Add Fee</h3>
<form method="POST" action="<?php echo e(route('fees.store')); ?>"><?php echo csrf_field(); ?>
<div class="mb-3"><label>Student</label><select name="student_id" class="form-control"><?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><option value="<?php echo e($s->id); ?>"><?php echo e($s->name); ?></option><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></select></div>
<div class="mb-3"><label>Amount</label><input name="amount" type="number" step="0.01" class="form-control"></div>
<div class="mb-3"><label>Paid On</label><input name="paid_on" type="date" class="form-control"></div>
<div class="mb-3"><label>Status</label><select name="status" class="form-control"><option value="pending">Pending</option><option value="paid">Paid</option></select></div>
<div class="mb-3"><label>Description</label><textarea name="description" class="form-control"></textarea></div>
<button class="btn btn-primary">Save</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Tanish\sms\resources\views/fees/create.blade.php ENDPATH**/ ?>