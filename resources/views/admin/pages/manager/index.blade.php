@extends('admin.layouts.master')

@section('title') Manager List @endsection
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('/assets/admin/manager/style.css') }}">
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Administration @endslot
        @slot('title') Manager List @endslot
    @endcomponent
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="add-new mb-3">
                        <a href="javascript:void(0);" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal"><i class="bx bx-plus"></i> Add New</a>
                    </div>
                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Avatar</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($user as $key=>$row)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>
                                    @if($row->name)
                                        <img src="{{ Avatar::create($row->name)->toBase64() }}" width='30' alt="">   
                                    @endif
                                </td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->email}}</td>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-success btn-sm edit" data-id="{{$row->id}}" data-bs-toggle="modal" data-bs-target="#editModal">Edit</a>
                                    <a href="javascript:void(0);" class="btn btn-danger btn-sm delete" data-id="{{$row->id}}" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td align="center" colspan="5">There are no any data.</p>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <!-- add new modal content -->
    <div id="addModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Add New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" class="form-horizontal" action="{{ route('manager.add') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Full Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="username" name="name" placeholder="Enter Fulll Name" autofocus required>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="useremail" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="useremail" name="email" placeholder="Enter email" autofocus required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="userpassword" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="userpassword" name="password"
                                placeholder="Enter password" autofocus required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="confirmpassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="confirmpassword" name="password_confirmation"
                            name="password_confirmation" placeholder="Enter Confirm password" autofocus required>
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mt-4 d-grid">
                            <button class="btn btn-success waves-effect waves-light"
                                type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- edit modal content -->
    <div id="editModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Add New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Full Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror username" id="username" name="name" placeholder="Enter Fulll Name" autofocus required>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="useremail" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror useremail" id="useremail" name="email" placeholder="Enter email" autofocus required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="userpassword" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror userpassword" id="userpassword" name="password"
                                placeholder="Enter password" autofocus required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mt-4 d-grid">
                            <button class="btn btn-success waves-effect waves-light confirm_edit"
                                >Update</button>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- delete modal content -->
    <div id="deleteModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">User Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you delete seleted user?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect"
                        data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light confirm_delete">Yes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@section('script')
    <script>
        var list_url = "{{route('manager.index')}}";
        var detail_url = "{{route('manager.detail')}}";
        var edit_url = "{{route('manager.edit')}}";
        var delete_url = "{{route('manager.delete')}}";
    </script>
    <script src="{{ URL::asset('/assets/admin/manager/index.js') }}"></script>
@endsection
