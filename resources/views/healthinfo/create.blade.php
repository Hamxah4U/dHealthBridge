@extends('layouts.app')

@section('title', 'Patient Registration')

@section('content')

<form action="{{ route('healthinfo.store') }}" method="POST">
@csrf

<!-- HEADER -->
<div class="row shadow p-3 text-primary">
    <div class="col-12">
        <h5><i class="fas fa-hospital-user"></i><strong>Patient Registration Form</strong></h5>
    </div>
</div>

<!-- REGISTRATION TYPE -->

<!-- IDENTITY -->
<div class="p-3">
    <h6 class="text-warning"><i class="fas fa-key"></i> IDENTITY INFORMATION</h6>

    <div class="row">
        <div class="col-md-6">
            <label>Category</label>
            <select name="category_id" class="form-control" id="category_id">
                <option value="">select category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
            <x-form-error name='category_id' />
        </div>

        <div class="col-md-6">
            <label>Insurance Code</label>
            <input type="text" name="insurance_no" class="form-control" value="{{ old('insurance_no') }}">
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
    <h6 class="text-warning"><i class="fas fa-user"></i> PATIENT'S PERSONAL INFORMATION</h6>

    <div class="row">
        <div class="col-md-4">
            <label>Surname *</label>
            <input type="text" name="surname" class="form-control" id="surname" value="{{ old('surname') }}">
            <x-form-error name='surname' /> 
        </div>

        <div class="col-md-4">
            <label>Firstname *</label>
            <input type="text" name="firstname" class="form-control" id="firstname" value="{{ old('firstname') }}">
            <x-form-error name='firstname' />
        </div>

        <div class="col-md-4">
            <label>Othername</label>
            <input type="text" name="othername" class="form-control" id="othername" value="{{ old('othername') }}">
        </div>

        <div class="col-md-4">
            <label>Gender *</label>
            <select name="gender_id" class="form-control" id="gender_id">
                <option value=""></option>
                @foreach($genders as $gender)
                    <option value="{{ $gender->id }}" {{ old('gender_id') == $gender->id ? 'selected' : '' }}>{{ $gender->name }}</option>
                @endforeach
            </select>
            <x-form-error name='gender_id' />
        </div>

        <div class="col-md-4">
            <label>Date of Birth *</label>
            <input type="date" name="dob" class="form-control" value="{{ old('dob') }}">
        </div>

        <div class="col-md-4">
            <label>GSM No *</label>
            <input type="text" name="phonenumber" class="form-control" value="{{ old('phonenumber') }}">
            <x-form-error name="phonenumber" />
        </div>

        <div class="col-md-4">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
            <x-form-error name='email' />
        </div>

        <div class="col-md-4">
            <label>State</label>
            <select name="state_id" id="state_id" class="form-control select2">
                <option value="">Select State</option>
                @foreach($states as $state)
                    <option value="{{ $state->id }}" {{ old('state_id') == $state->id ? 'selected' : '' }}>{{ $state->name }}</option>
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
            <textarea name="address" id="" class="form-control" id="address">{{ old('address') }}</textarea>
        </div>
    </div>
</div>
<hr>

<!-- NEXT OF KIN -->
<div class="p-3">
    <h6 class="text-warning">
        <i class="fas fa-user"></i> <i class="fas fa-phone"></i> NEXT OF KIN Information
    </h6>

    <div class="row">
        <div class="col-md-4">
            <label>Full Name</label>
            <input type="text" name="nok_fullname" class="form-control" id="nok_fullname" value="{{ old('nok_fullname') }}">
        </div>

        <div class="col-md-4">
            <label>Relationship</label>
            <select name="relationship_id" class="form-control">
                <option value=""></option>
                @foreach ($rships as $rship)
                    <option value="{{ $rship->id }}" {{ old('relationship_id') == $rship->id ? 'selected' : '' }}>{{ $rship->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4">
            <label>Phone</label>
            <input type="text" name="nok_phonenumber" class="form-control" id="nok_phonenumber" value="{{ old('nok_phonenumber') }}">
        </div>

        <div class="col-md-12">
            <label>Address</label>
            <textarea name="nok_address" id="nok_address" class="form-control">{{ old('nok_address') }}</textarea>
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