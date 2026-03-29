@extends('layouts.app')

@section('title', 'Digital Health Bridge - Appointments')

@section('content')

<form action="{{ route('appointments.store') }}" method="POST">
@csrf

<div class="row">

    <div class="col-md-6">
      <label>Patient</label>
      <input type="text" name="paatient" id="" class="form-control" value="{{ $patient->surname }} {{ $patient->firstname }} {{ $patient->othername }} | {{ $patient->hospital_no }} " readonly>
      <input type="text" name="healthinfo_id" id="healthinfo_id" value="{{ $patient->id }}" hidden>
    </div>

    <div class="col-md-6">
        <label>Clincs</label>
        <select name="clinic_id" class="form-control" id="clinic_id">
            <option value="">Select Clinic</option>
            @foreach($clinics as $clinic)
                <option value="{{ $clinic->id }}" {{ old('clinic_id') == $clinic->id ? 'selected' : '' }}>{{ $clinic->name }}</option>
            @endforeach
        </select>
        <x-form-error name="clinic_id" />
    </div>

    <div class="col-md-6">
        <label>Date</label>
        <input type="date" name="appointment_date" class="form-control" id="appointment_date" value="{{ old('appointment_date') }}">
        <x-form-error name="appointment_date" />
    </div>

    <div class="col-md-6">
        <label>Time</label>
        <input type="time" name="appointment_time" class="form-control" id="appointment_time" value="{{ old('appointment_time') }}">
        <x-form-error name="appointment_time" />
    </div>

    <div class="col-md-12">
        <label>Reason</label>
        <textarea name="reason" class="form-control" id="reason">{{ old('reason') }}</textarea>
    </div>

</div>

<button class="btn btn-primary mt-3">Book Appointment</button>

</form>

@endsection