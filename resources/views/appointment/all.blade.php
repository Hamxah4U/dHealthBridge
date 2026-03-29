@extends('layouts.app')

@section('title', 'Digital Health  Bridge - Book Appointment')

@section('content')

<form action="{{ route('healthinfo.store') }}" method="POST">
@csrf

<!-- HEADER -->
<div class="row shadow p-3 text-primary">
    <div class="col-12">
        <h5><i class="fas fa-hospital-user"></i> All Patient Appointment</h5>
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
                {{-- <th>Action</th> --}}
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
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection