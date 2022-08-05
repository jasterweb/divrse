@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('ARTICLES'),
        'description' => __('Create new article'),
        'class' => 'col-lg-12'
    ])   

    <div class="container-fluid mt--7">
        <form action="{{route('article.update',$article->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
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
                                       <p class="ml-4 description text-dark">{{ $article->published_at }}</p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <h3>Post By </h3>
                                        <p class="ml-4 description text-dark">{{ $article->user->name }}</p>
                                     </div>
                                     <div>
                                        <h3>Thumbnail </h3>
                                        <form action="{{route('article.storeMedia')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                        
                                            <div class="d-flex flex-column">
                                            <img src="{{$article->getFirstMediaUrl('document')}}" />
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                Change Image
                                              </button>
                                            </div>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    
                                            <div class="form-group">
                                                <div class="needsclick dropzone" id="document-dropzone">
                                        
                                                </div>
                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
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
                                    <input type="text" name="title" id="input-name" class="form-control form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Title') }}" value="{{$article->title}}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('desc') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Description') }}</label>
                                    <textarea class="form-control" name="desc" rows="5" id="notes" placeholder="Description">{{$article->desc   }}</textarea>

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