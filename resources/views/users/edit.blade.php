@extends('layouts.app')

@section('content')

    {{-- Gradient Background --}}
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
        </div>
    </div>

    {{-- Form Card --}}
    <div class="container-fluid mt--7">
        <div class="card shadow p-lg-5 py-md-5 px-md-2 col-xl-9 col-12 mx-auto mb-5">

            <div class="card-header">
                <h2 class="text-black mb-0">Edit User</h2>
            </div>

            <div class="card-body">
                <form method="post" action="/user/{{ $user->id }}" autocomplete="off">
                    @csrf
                    @method('put')

                    <h6 class="heading-small text-muted mb-4">{{ __('User information') }}</h6>

                    {{-- Input Column --}}
                    <div class="row">

                        {{-- First Column --}}
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">{{ __('Username') }}</label>
                                <input type="text" name="username" id="input-username" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Username') }}" value="{{ $user->username }}" required autofocus>
                            </div>
    
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ $user->email }}" required>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label" for="input-phone">{{ __('Phone') }}</label>
                                <input type="text" name="phone" id="input-phone" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Phone') }}" value="{{ $user->phone }}" required>
                            </div>
                        </div>

                        {{-- Second Column --}}
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-fullname">{{ __('Full Name') }}</label>
                                <input type="text" name="fullname" id="input-fullname" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Full Name') }}" value="{{ $user->fullname }}" required>
                            </div>
    
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">{{ __('Address') }}</label>
                                <input type="text" name="address" id="input-address" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Address') }}" value="{{ $user->address }}" required>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                            </div>
                        </div>

                    </div>
                    {{-- User Info Column End --}}

                </form>

                <form action="/user/password/{{ $user->id }}" method="post">
                @csrf
                @method('put')

                    {{-- Password Column Start --}}
                    <hr class="my-4" />
                    <h6 class="heading-small text-muted mb-4">{{ __('Password') }}</h6>

                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="row">

                        {{-- First Column --}}
                        <div class="col-lg-6 col-md-12">

                            <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-current-password">{{ __('Current Password') }}</label>
                                <input type="password" name="old_password" id="input-current-password" class="form-control form-control-alternative{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('Current Password') }}" value="" required>
                            </div>
    
                            <div class="form-group{{ $errors->has('new_password') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-password">{{ __('New Password') }}</label>
                                <input type="password" name="new_password" id="input-password" class="form-control form-control-alternative{{ $errors->has('new_password') ? ' is-invalid' : '' }}" placeholder="{{ __('New Password') }}" value="" required>
                            </div>

                        </div>

                        {{-- Second Column --}}
                        <div class="col-lg-6 col-md-12">

                            <div class="form-group">
                                <label class="form-control-label" for="input-password-confirmation">{{ __('Confirm Password') }}</label>
                                <input type="password" name="new_password_confirmation" id="input-password-confirmation" class="form-control form-control-alternative" placeholder="{{ __('Confirm Password') }}" value="" required>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-success mt-4">{{ __('Change password') }}</button>
                            </div>

                        </div>

                    </div>
                    {{-- Password Column End --}}

                </form>
                    
            </div>
        </div>
    </div>
@endsection
