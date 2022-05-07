@extends('admin.layouts.master')

@section('title') Manager List @endsection
@section('css')
    
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Manager List @endslot
        @slot('title') Administration @endslot
    @endcomponent
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Manager List</h4>

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
                    <button type="button" class="btn btn-primary waves-effect waves-light delete-user">Yes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@section('script')
    <script src="{{ URL::asset('/assets/Admin/js/Hotel/user.js') }}"></script>
@endsection
