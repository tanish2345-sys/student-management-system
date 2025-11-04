<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Student Management</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
<div class="container-fluid">
<a class="navbar-brand" href="<?php echo e(route('students.index')); ?>">SMS</a>
<div class="collapse navbar-collapse">
<ul class="navbar-nav me-auto">
<li class="nav-item"><a class="nav-link" href="<?php echo e(route('students.index')); ?>">Students</a></li>
<li class="nav-item"><a class="nav-link" href="<?php echo e(route('attendances.index')); ?>">Attendance</a></li>
<li class="nav-item"><a class="nav-link" href="<?php echo e(route('marks.index')); ?>">Marks</a></li>
<li class="nav-item"><a class="nav-link" href="<?php echo e(route('fees.index')); ?>">Fees</a></li>
</ul>
</div>
</div>
</nav>
<div class="container">
<?php if(session('success')): ?>
<div class="alert alert-success"><?php echo e(session('success')); ?></div>
<?php endif; ?>
<?php echo $__env->yieldContent('content'); ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\Users\Tanish\sms\resources\views/layouts/app.blade.php ENDPATH**/ ?>