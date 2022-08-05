@extends('layouts.app')

@section('content')

    {{-- Gradient Background --}}
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
        </div>
    </div>

    {{-- Form Card --}}
    <div class="container-fluid mt--7">
        <div class="card shadow p-lg-5 pb-lg-0 py-md-5 px-md-2 col-xl-9 col-12 mx-auto mb-5">

            <div class="card-header">
                <h2 class="text-black mb-0">Update personal details here.</h2>
            </div>

            <div class="card-body">
                <form method="post" id="contact-form" action="/contact/{{ $contact->id }}" autocomplete="off">
                    @csrf
                    @method('put')

                    {{-- Input Column --}}
                    <div class="row">

                        {{-- First Column --}}
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ $contact->email }}" required autofocus>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label" for="input-address">{{ __('Address') }}</label>
                                <input type="text" name="address" id="input-address" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Address') }}" value="{{ $contact->address }}" required>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label" for="input-phone">{{ __('Phone') }}</label>
                                <input type="text" name="phone" id="input-phone" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Phone') }}" value="{{ $contact->phone }}" required>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label" for="input-whatsapp">{{ __('Whatsapp') }}</label>
                                <input type="text" name="whatsapp" id="input-whatsapp" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Whatsapp') }}" value="{{ $contact->whatsapp }}" required>
                            </div>
                        </div>

                        {{-- Second Column --}}
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-instagram">{{ __('Instagram') }}</label>
                                <input type="text" name="instagram" id="input-instagram" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Instagram') }}" value="{{ $contact->instagram }}" required>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label" for="input-facebook">{{ __('Facebook') }}</label>
                                <input type="text" name="facebook" id="input-facebook" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Facebook') }}" value="{{ $contact->facebook }}" required>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label" for="input-youtube">{{ __('Youtube') }}</label>
                                <input type="text" name="youtube" id="input-youtube" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Youtube') }}" value="{{ $contact->youtube }}" required>
                            </div>
                        </div>

                    </div>
                    {{-- Input Column End --}}

                    <div class="text-right">
                        <button type="submit" id="submit-button" class="btn btn-success">{{ __('Save') }}</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        $(document).ready(function () {

            @if (session('status'))
                swal("Done!", "{{ session('status') }}", "success");
            @endif

            $('#submit-button').on('click', function (e) {
                e.preventDefault();
                swal({
                    title: 'Are you sure?',
                    text: 'Are you sure want to save contact information?',
                    icon: 'warning',
                    buttons: true,
                    dangerMode: true,
                })
                .then((willEdit) => {
                    if (willEdit) {
                        $('#contact-form').submit();
                    }
                });
            });

        });
    </script>
@endpush