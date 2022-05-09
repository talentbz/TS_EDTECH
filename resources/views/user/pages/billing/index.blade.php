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
                                    <a href="javascript:void(0);" class="invoice-click">
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
                                    <a href="javascript:void(0);" class="invoice-click">
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
@endsection