@extends('layouts.app')

@section('title', 'Patient Registration')

@section('content')

{{-- <form action="{{ route('patients.store') }}" method="POST"> --}}
@csrf

<!-- HEADER -->
<div class="row shadow p-3 text-primary">
    <div class="col-12">
        <h5><i class="fas fa-hospital-user"></i> Registration Form</h5>
    </div>
</div>

<!-- REGISTRATION TYPE -->
<div class="row p-3">
    <div class="col-md-6">
        <label><strong>Registration Type *</strong></label>
        <select name="type" class="form-control">
            <option>New</option>
            <option>Update</option>
        </select>
    </div>

    <div class="col-md-6">
        <label><strong>Search Number</strong></label>
        <input type="text" name="search" class="form-control" placeholder="Enter Hospital Number">
    </div>
</div>

<hr>

<!-- IDENTITY -->
<div class="p-3">
    <h6 class="text-warning"><i class="fas fa-key"></i> IDENTITY INFORMATION</h6>

    <div class="row">
        <div class="col-md-6">
            <label>Category</label>
            <select name="category" class="form-control">
                <option>Regular Account</option>
                <option>NHIS Principal</option>
                <option>NHIS Dependant</option>
                <option>Private Account</option>
            </select>
        </div>

        <div class="col-md-6">
            <label>Insurance Number</label>
            <input type="text" name="insurance_no" class="form-control">
        </div>

        <div class="col-md-6">
            <label>Hospital Number</label>
            <input type="text" name="hospital_no" class="form-control" placeholder="Auto generate if empty">
        </div>
    </div>
</div>

<hr>

<!-- PERSONAL INFO -->
<div class="p-3">
    <h6 class="text-warning"><i class="fas fa-user"></i> PERSONAL INFORMATION</h6>

    <div class="row">
        <div class="col-md-4">
            <label>Surname *</label>
            <input type="text" name="surname" class="form-control">
        </div>

        <div class="col-md-4">
            <label>Firstname *</label>
            <input type="text" name="firstname" class="form-control">
        </div>

        <div class="col-md-4">
            <label>Othername</label>
            <input type="text" name="othername" class="form-control">
        </div>

        <div class="col-md-4">
            <label>Sex *</label>
            <select name="sex" class="form-control">
                <option>Male</option>
                <option>Female</option>
                <option>NNS</option>
            </select>
        </div>

        <div class="col-md-4">
            <label>Date of Birth *</label>
            <input type="date" name="dob" class="form-control">
        </div>

        <div class="col-md-4">
            <label>GSM No *</label>
            <input type="text" name="phone" class="form-control">
        </div>

        <div class="col-md-4">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="col-md-4">
            <label>State</label>
            <input type="text" name="state" class="form-control">
        </div>

        <div class="col-md-4">
            <label>LGA</label>
            <input type="text" name="lga" class="form-control">
        </div>

        <div class="col-md-6">
            <label>Address</label>
            <input type="text" name="address" class="form-control">
        </div>
    </div>
</div>

<hr>

<!-- NEXT OF KIN -->
<div class="p-3">
    <h6 class="text-warning">
        <i class="fas fa-user"></i> <i class="fas fa-phone"></i> NEXT OF KIN
    </h6>

    <div class="row">
        <div class="col-md-4">
            <label>Full Name</label>
            <input type="text" name="kin_name" class="form-control">
        </div>

        <div class="col-md-4">
            <label>Relationship</label>
            <select name="relationship" class="form-control">
                <option>Father</option>
                <option>Mother</option>
                <option>Brother</option>
                <option>Sister</option>
            </select>
        </div>

        <div class="col-md-4">
            <label>Phone</label>
            <input type="text" name="kin_phone" class="form-control">
        </div>

        <div class="col-md-6">
            <label>Address</label>
            <input type="text" name="kin_address" class="form-control">
        </div>
    </div>
</div>

<hr>

<!-- SUBMIT -->
<div class="text-right p-3">
    <button type="submit" class="btn btn-primary">Save Patient</button>
</div>

</form>

@endsection