@extends('layouts.app')

@section('content')
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <a href="{{route('article.create')}}" class="btn btn-warning">Add New Post</a>
        </div>
    </div>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow mb-5">

                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <h3 class="mb-0">All Posts</h3>
                            </div>
                           
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="table-responsive">
                            <table id="article-table" class="table align-items-center table-flush">

                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">title</th>
                                        <th scope="col">Published at</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach ($articles as $article)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $article->title }}</td>
                                            <td>{{ date('d F Y', strtotime($article->published_at));}}</td>
                                            <td class="text-center">
                                                <input class="form-control" type="hidden" name="idAbsen" id="idarticle" value="{{ $article->id }}">
                                                <a class="btn btn-primary inline" href="{{ route('article.edit',$article->id) }}">Edit</a>
                                                <a href="{{ route('article.delete', $article->id) }}" class="btn btn-danger hilang"><i data-feather="slash"></i>Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                                
                            </table>
                        </div>
                        
                    </div>

                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="..."></nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    {{-- <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script> --}}
    {{-- <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
    <!-- Argon JS -->
    {{-- <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script> --}}

    <script>
        $(document).ready(function() {
            $('#article-table').DataTable();
        });

        $('.hilang').on('click', function (event) {
            event.preventDefault();
            var idAbsen = $('#articleid').val();
     
     
            const url = $(this).attr('href');
            swal({
             title: 'Yakin mau Delete ?',
                text: 'Pastikan dulu biar ngga salah 🙏',
                icon: 'warning',
                buttons: ["Gajadi, maap", "Tolak"],
            }).then(function(value) {
                if (value) {
                    window.location.href = url;
                }
            });
        });
    </script>
@endpush
