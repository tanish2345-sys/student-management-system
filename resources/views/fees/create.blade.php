@extends('layouts.app')
@section('content')
<h3>Add Fee</h3>
<form method="POST" action="{{ route('fees.store') }}">@csrf
<div class="mb-3"><label>Student</label><select name="student_id" class="form-control">@foreach($students as $s)<option value="{{ $s->id }}">{{ $s->name }}</option>@endforeach</select></div>
<div class="mb-3"><label>Amount</label><input name="amount" type="number" step="0.01" class="form-control"></div>
<div class="mb-3"><label>Paid On</label><input name="paid_on" type="date" class="form-control"></div>
<div class="mb-3"><label>Status</label><select name="status" class="form-control"><option value="pending">Pending</option><option value="paid">Paid</option></select></div>
<div class="mb-3"><label>Description</label><textarea name="description" class="form-control"></textarea></div>
<button class="btn btn-primary">Save</button>
</form>
@endsection