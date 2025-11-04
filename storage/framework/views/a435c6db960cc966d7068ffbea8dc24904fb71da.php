
<?php $__env->startSection('content'); ?>
<h3>Edit Student</h3>
<form method="POST" action="<?php echo e(route('students.update',$student)); ?>">
<?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
<div class="mb-3"><label>Name</label><input name="name" class="form-control" value="<?php echo e(old('name',$student->name)); ?>" required></div>
<div class="mb-3"><label>Email</label><input name="email" class="form-control" value="<?php echo e(old('email',$student->email)); ?>"></div>
<div class="mb-3"><label>Roll No</label><input name="roll_no" class="form-control" value="<?php echo e(old('roll_no',$student->roll_no)); ?>" required></div>
<div class="mb-3"><label>Class</label><input name="class" class="form-control" value="<?php echo e(old('class',$student->class)); ?>"></div>
<div class="mb-3"><label>Phone</label><input name="phone" class="form-control" value="<?php echo e(old('phone',$student->phone)); ?>"></div>
<div class="mb-3"><label>Address</label><textarea name="address" class="form-control"><?php echo e(old('address',$student->address)); ?></textarea></div>
<button class="btn btn-primary">Update</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Tanish\sms\resources\views/students/edit.blade.php ENDPATH**/ ?>