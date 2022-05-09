@extends('user.layouts.master-layouts')

@section('title') Billing Information @endsection
@section('css')
    <link href="{{ URL::asset('/assets/user/billing/style.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') User @endslot
        @slot('title') Billing Information @endslot
    @endcomponent
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="invoice">
                    <div class="row">
                        <h5 class="mb-3">Invoice Information</h5>
                        <div class="invoice-content">
                            <div class="row">
                                <div class="col-md-3 p-3">
                                    <a href="javascript:void(0);" class="invoice-click" data-bs-toggle="modal" data-bs-target="#addInvoice">
                                        <div class="add-new">
                                            <div class="new-button mt-3">
                                                <i class="bx bx-plus-circle"></i>
                                                <p>Add New Address</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @for($i=0; $i<3; $i++)
                                <div class="col-md-3 p-3">
                                    <div class="detail p-3">
                                        <div class="title">
                                            <h6><strong>ABC Co., Ltd.</strong></h6>
                                            <p>HQ</p>
                                            <p><span>TAX ID:</span> 010000000000</p>
                                            <P><span>ADDRESS:</span> 119 RURAL ROAD 3009 SONG PHI NONG</P>
                                            <a href="javascript:void(0);" class="text-success">VIEW</a>
                                        </div>
                                    </div>
                                </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bank mt-4">
                    <div class="row">
                        <h5 class="mb-3">YOUR BANK INFORMATION (For Withholding Tax Refund)</h5>
                        <div class="invoice-content">
                            <div class="row">
                                <div class="col-md-3 p-3">
                                    <a href="javascript:void(0);" class="bank-click" data-bs-toggle="modal" data-bs-target="#addBank">
                                        <div class="add-new">
                                            <div class="new-button mt-3">
                                                <i class="bx bx-plus-circle"></i>
                                                <p>Add New Bank Account</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @for($i=0; $i<3; $i++)
                                <div class="col-md-3 p-3">
                                    <div class="detail p-3">
                                        <div class="title">
                                            <h6><strong>Bank Account Name</strong></h6>
                                            <P><span>ADDRESS:</span> 119 RURAL ROAD 3009 SONG PHI NONG</P>
                                            <h6 class="text-success"><strong>Account Number</strong></h6>
                                            <h6>0000000000</h6>
                                            <a href="javascript:void(0);" class="text-success mt-3">VIEW</a>
                                        </div>
                                    </div>
                                </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- add invoice modal content -->
    <div id="addInvoice" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Add New Invoice</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" class="custom-validation" action="#" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Contact Person Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Fulll Name" autofocus required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mobile Phone</label>
                            <input id="input-mask" class="form-control input-mask" data-inputmask="'mask': '999-9999-999'" placeholder="000-0000-000"  required>
                        </div>
                        <div class="mb-3">
                            <h5>INVOICE INFORMATION DETAIL</h5>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="person_type" id="formRadios1" data-id="1" checked>
                                    <label class="form-check-label" for="formRadios1">
                                        Individual
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="person_type" id="formRadios2" data-id="2">
                                    <label class="form-check-label" for="formRadios2">
                                        Business
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Fulll Name" autofocus required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">TAX ID</label>
                            <input type="text" class="form-control input-mask" data-inputmask="'mask': '999-9999-9999999'" required placeholder="000-000-0000000" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Full Address</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Fulll Name" autofocus required>
                        </div>
                        <div class="busness_add">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="busness_add" id="quarter" checked>
                                        <label class="form-check-label" for="quarter">
                                            Head Quarter
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="busness_add" id="branch_no">
                                        <label class="form-check-label" for="branch_no">
                                            Branch No.
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="name" placeholder="0000" autofocus required>
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
    <div id="addBank" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Add New Bank</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Bank Account Owner Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Fulll Name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Bank Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Bank Name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Account Number</label>
                            <input class="form-control input-mask" data-inputmask="'mask': '999-9999-999'" placeholder="000-0000-000"  required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Branch Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Branch Name" required>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                                <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                <input type="file" class="form-control" id="inputGroupFile01" required>
                            </div>
                        </div>
                        <div class="mt-4 d-grid">
                            <button class="btn btn-success waves-effect waves-light confirm_edit"
                                >Save Info</button>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@section('script') 
    <!-- form mask -->
    <script src="{{ URL::asset('/assets/libs/inputmask/inputmask.min.js') }}"></script>
    <!-- form mask init -->
    <script src="{{ URL::asset('/assets/js/pages/form-mask.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/form-validation.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/user/billing/index.js') }}"></script>
@endsection