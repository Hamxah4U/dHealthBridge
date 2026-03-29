@extends('layouts.app')

@section('title', 'Digital Health  Bridge - Book Appointment')

@section('content')

<form action="{{ route('healthinfo.store') }}" method="POST">
@csrf

<!-- HEADER -->
<div class="row shadow p-3 text-primary">
    <div class="col-12">
        <h5><i class="fas fa-hospital-user"></i> Manage Patient</h5>
    </div>
</div>

<div class="table table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Fullname</th>
                <th>Hospital no.</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Phone</th>
                <th>passport</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($appointments as $appointment)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $appointment->patient->firstname }} {{ $appointment->patient->other_names }} {{ $appointment->patient->surname }}</td>
                    <td>{{ $appointment->patient->hospital_no }}</td>
                    <td>{{ $appointment->patient->gender->name }}</td>
                    <td>{{ $appointment->patient->age }}yrs</td>
                    <td>{{ $appointment->patient->phonenumber }}</td>
                    <td>{{ $appointment->patient->passport }}</td>
                    <td>
                        <a href="{{ route('appointments.show', $appointment->id) }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-eye"></i> View
                        </a>
                        <a href="{{ route('appointments.edit', $appointment->id) }}" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this appointment?')">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                        <a href="{{ route('appointments.index') }}" class="btn btn-sm btn-secondary">
                            <i class="fas fa-times"></i> Cancel
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection