
<?php $__env->startSection('content'); ?>
<h3>Add Student</h3>
<form method="POST" action="<?php echo e(route('students.store')); ?>">
<?php echo csrf_field(); ?>
<div class="mb-3"><label>Name</label><input name="name" class="form-control" required></div>
<div class="mb-3"><label>Email</label><input name="email" class="form-control"></div>
<div class="mb-3"><label>Roll No</label><input name="roll_no" class="form-control" required></div>
<div class="mb-3"><label>Class</label><input name="class" class="form-control"></div>
<div class="mb-3"><label>Phone</label><input name="phone" class="form-control"></div>
<div class="mb-3"><label>Address</label><textarea name="address" class="form-control"></textarea></div>
<button class="btn btn-primary">Save</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Tanish\sms\resources\views/students/create.blade.php ENDPATH**/ ?>