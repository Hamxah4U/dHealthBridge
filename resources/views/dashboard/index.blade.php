@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 text-gray-800">Dashboard</h1>
</div>

<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow h-100 py-2">
            <div class="card-body">
                <h5>$40,000</h5>
                <p>Earnings (Monthly)</p>
            </div>
        </div>
    </div>
</div>

@endsection