@extends('layouts.app')
@section('title', 'All Users')
@section('content')
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <a href="{{route('user.create')}}" class="btn btn-warning">Add New User</a>
        </div>
    </div>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow mb-5">

                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <h3 class="mb-0">Users</h3>
                            </div>
                        </div>
                    </div>


                    <div class="card-body py-0">

                        <div class="table-responsive">
                            <table id="users-table" class="table align-items-center table-flush">

                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Fullname</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone Number</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->fullname }}</td>
                                            <td>{{ $user->address }}</td>
                                            <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                                            <td>{{ $user->phone }}</td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                        <a class="dropdown-item" href="{{ route('user.edit', $user->id) }}">Edit</a>
                                                        <form method="POST" class="delete-form" action="{{ route('user.destroy', $user->id) }}">
                                                            @csrf
                                                            @method('delete')

                                                            <button class="dropdown-item delete-button" type="submit">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                                
                            </table>
                            <br>
                        </div>
                        
                    </div>

                    <div class="card-footer py-3">
                        <nav class="d-flex justify-content-end" aria-label="..."></nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

    <script>
        $(document).ready(function() {

            $('#users-table').DataTable( {
                "language": {
                    "paginate": {
                        "previous": "<",
                        "next": ">"
                    }
                }
            });

            @if (session('status'))
                swal("Done!", "{{ session('status') }}", "success");
            @endif

            $('.delete-button').on('click', function (e) {
                var form =  $(this).closest("form");
                e.preventDefault();
                swal({
                    title: 'Are you sure?',
                    text: 'Once deleted, you will not be able to recover this user!',
                    icon: 'warning',
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
            });

        });
    </script>
@endpush
