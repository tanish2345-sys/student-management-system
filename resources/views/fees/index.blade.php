@extends('layouts.app')

@section('content')
    <h3>Fees Records</h3>

    <a href="{{ route('fees.create') }}" class="btn btn-primary mb-3">Add Fee Record</a>

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
            @foreach ($fees as $fee)
                <tr>
                    <td>{{ $fee->id }}</td>
                    <td>{{ $fee->student->name ?? 'N/A' }}</td>
                    <td>{{ $fee->amount }}</td>
                    <td>
                        @if ($fee->status == 'paid')
                            <span class="badge bg-success">Paid</span>
                        @else
                            <span class="badge bg-danger">Pending</span>
                        @endif
                    </td>
                    <td>{{ $fee->payment_date }}</td>
                    <td>
                        <a href="{{ route('fees.edit', $fee->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('fees.destroy', $fee->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this record?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection