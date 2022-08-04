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
                <h2 class="text-black mb-0">Add User</h2>
            </div>

            <div class="card-body">
                <form method="post" action="{{ route('user.store') }}" autocomplete="off">
                    @csrf

                    <h6 class="heading-small text-muted mb-4">{{ __('User information') }}</h6>

                    {{-- Input Column --}}
                    <div class="row">

                        {{-- First Column --}}
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">{{ __('Username') }}</label>
                                <input type="text" name="username" id="input-username" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Username') }}" value="" required autofocus>
                            </div>
    
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="" required>
                            </div>
    
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-password">{{ __('Password') }}</label>
                                <input type="password" name="password" id="input-password" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" value="" required>
                            </div>
                        </div>

                        {{-- Second Column --}}
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-fullname">{{ __('Full Name') }}</label>
                                <input type="text" name="fullname" id="input-fullname" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Full Name') }}" value="" required>
                            </div>
    
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">{{ __('Address') }}</label>
                                <input type="text" name="address" id="input-address" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Address') }}" value="" required>
                            </div>
    
                            <div class="form-group">
                                <label class="form-control-label" for="input-phone">{{ __('Phone') }}</label>
                                <input type="text" name="phone" id="input-phone" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Phone') }}" value="" required>
                            </div>
                        </div>

                    </div>
                    {{-- Input Column End --}}

                    <div class="text-right">
                        <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
