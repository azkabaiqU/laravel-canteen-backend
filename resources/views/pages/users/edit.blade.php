@extends('layouts.app')

@section('title', 'Advanced Forms')

@push('style')
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
<link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Form</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Forms</a></div>
                <div class="breadcrumb-item">Edit Form</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Edit Form</h2>
            <p class="section-lead">We provide advanced input fields, such as date picker, color picker, and so on.</p>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Input Text</h4>
                    </div>
                    <form class="card-body" action="{{route('user.update', $user->id)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label>name</label>
                            <input type="text" name="name" class="form-control" value="{{ $user->name}}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $user->email}}">
                        </div>
                        <div class="form-group">
                            <label>Password Strength</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                </div>
                                <input type="password" name="password" class="form-control pwstrength" value="{{ $user->phone}}">
                            </div>
                            <div id="pwindicator" class="pwindicator">
                                <div class="bar"></div>
                                <div class="label"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                </div>
                                <input type="text" name="phone" class="form-control phone-number">
                            </div>
                        </div>
                        <div class="section-title">Select Group Button</div>
                        <div class="form-group">
                            <label class="form-label">Size</label>
                            <div class="selectgroup w-100">
                                <label class="selectgroup-item">
                                    <input type="radio"
                                        name="role"
                                        value="admin"
                                        class="selectgroup-input"
                                        @if($user->role == 'admin')
                                        checked
                                        @endif
                                        >
                                    <span class="selectgroup-button">Admin</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio"
                                        name="role"
                                        value="staff"
                                        @if($user->role == 'staff')
                                        checked
                                        @endif
                                        class="selectgroup-input">
                                    <span class="selectgroup-button">Staff</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio"
                                        name="role"
                                        value="user"
                                        @if($user->role == 'user')
                                        checked
                                        @endif
                                        class="selectgroup-input">
                                    <span class="selectgroup-button">User</span>
                                </label>
                            </div>
                        </div>
                        {{-- btn --}}
                        <div class="form-group text-right md-3">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<!-- JS Libraies -->
<script src="{{ asset('library/cleave.js/dist/cleave.min.js') }}"></script>
<script src="{{ asset('library/cleave.js/dist/addons/cleave-phone.us.js') }}"></script>
<script src="{{ asset('library/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('library/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('library/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('js/page/forms-advanced-forms.js') }}"></script>
@endpush
