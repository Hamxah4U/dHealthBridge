@extends('layouts.app')

@section('title', 'Patient Registration')

@section('content')

<form action="{{ route('healthinfo.store') }}" method="POST">
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
            <input type="text" name="hospital_no" class="form-control" placeholder="Auto generate if empty" readonly>
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
            <input type="text" name="surname" class="form-control" id="surname">
            <x-form-error name='surname' /> 
        </div>

        <div class="col-md-4">
            <label>Firstname *</label>
            <input type="text" name="firstname" class="form-control" id="firstname">
            <x-form-error name='firstname' />
        </div>

        <div class="col-md-4">
            <label>Othername</label>
            <input type="text" name="othername" class="form-control">
        </div>

        <div class="col-md-4">
            <label>Gender *</label>
            <select name="gender_id" class="form-control" id="gender_id">
                <option value=""></option>
                @foreach($genders as $gender)
                    <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                @endforeach
            </select>
            <x-form-error name='gender_id' />
        </div>

        <div class="col-md-4">
            <label>Date of Birth *</label>
            <input type="date" name="dob" class="form-control">
        </div>

        <div class="col-md-4">
            <label>GSM No *</label>
            <input type="text" name="phonenumber" class="form-control">
            <x-form-error name="phonenumber" />
        </div>

        <div class="col-md-4">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
            <x-form-error name='email' />
        </div>

        <div class="col-md-4">
            <label>State</label>
            <select name="state_id" id="state_id" class="form-control select2">
                <option value="">Select State</option>
                @foreach($states as $state)
                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4">
            <label>LGA</label>
            <select name="lga_id" id="lga_id" class="form-control select2">
                <option value="">Select LGA</option>
            </select>
        </div>

        <div class="col-md-12">
            <label>Address</label>
            <textarea name="address" id="" class="form-control"></textarea>
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
            <input type="text" name="nok_fullname" class="form-control">
        </div>

        <div class="col-md-4">
            <label>Relationship</label>
            <select name="relationship_id" class="form-control">
                <option value=""></option>
                @foreach ($rships as $rship)
                    <option value="{{ $rship->id }}">{{ $rship->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4">
            <label>Phone</label>
            <input type="text" name="nok_phonenumber" class="form-control">
        </div>

        <div class="col-md-12">
            <label>Address</label>
            <textarea name="nok_address" id="" class="form-control"></textarea>
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