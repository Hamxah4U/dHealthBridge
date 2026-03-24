@extends('layouts.app')

@section('title', 'All Patient')

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
                <th>Address</th>
                <th>passport</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($patients as $patient)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $patient->firstname }} {{ $patient->other_names }} {{ $patient->surname }}</td>
                    <td>{{ $patient->hospital_no }}</td>
                    <td>{{ $patient->gender->name }}</td>
                    <td>{{ $patient->age }}yrs</td>
                    <td>{{ $patient->phonenumber }}</td>
                    <td>{{ $patient->address }}</td>
                    <td>{{ $patient->passport }}</td>
                    <td>
                        <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection