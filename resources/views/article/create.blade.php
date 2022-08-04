@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('ARTICLES'),
        'description' => __('Create new article'),
        'class' => 'col-lg-12'
    ])   

    <div class="container-fluid mt--7">
        <form action="{{route('article.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="row">
           
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">

                <div class="card card-profile shadow">
                    
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <div class="d-flex justify-content-center">
                            
                            <button class="btn btn-md btn-info mr-4" type="submit">{{ __('Publish') }}</button>
                            
                        </div>
                    </div>
                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                
                                <div class="card-profile-stats d-flex justify-content-center mt-md-5 flex-column">
                                    <div class="d-flex justify-content-between">
                                       <h3>Date </h3>
                                       <p class="ml-4 description text-dark">{{ now() }}</p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <h3>Post By </h3>
                                        <p class="ml-4 description text-dark">{{ auth()->user()->name }}</p>
                                     </div>
                                     <div>
                                        <h3>Thumbnail </h3>
                                        <form action="{{route('article.storeMedia')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                        
                                            <div class="form-group">
                                                <div class="needsclick dropzone" id="document-dropzone">
                                        
                                                </div>
                                            </div>
                                        </form>  
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    
                    <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif


                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Ttiel') }}</label>
                                    <input type="text" name="title" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Title') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('desc') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Description') }}</label>
                                    <textarea class="form-control" name="desc" rows="5" id="notes" placeholder="Description"></textarea>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            
                            </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection
@push('js')
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.3/tinymce.min.js"></script>

        <script>
        tinymce.init({
            selector: 'textarea#notes',
            height: 385,
            });
        </script>
        <script>
            var uploadedDocumentMap = {}
            Dropzone.options.documentDropzone = {
            url: '{{ route('article.storeMedia') }}',
            maxFilesize: 2, // MB
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            success: function (file, response) {
                $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')
                uploadedDocumentMap[file.name] = response.name
            },
            removedfile: function (file) {
                file.previewElement.remove()
                var name = ''
                if (typeof file.file_name !== 'undefined') {
                name = file.file_name
                } else {
                name = uploadedDocumentMap[file.name]
                }
                $('form').find('input[name="document[]"][value="' + name + '"]').remove()
            },
            init: function () {
                @if(isset($project) && $project->document)
                var files =
                    {!! json_encode($project->document) !!}
                for (var i in files) {
                    var file = files[i]
                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
                }
                @endif
            }
            }
        </script>
@endpush