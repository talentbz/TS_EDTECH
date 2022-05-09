@extends('user.layouts.master-layouts')

@section('title') Setting @endsection
@section('css')
    <link href="{{ URL::asset('/assets/user/setting/style.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') User @endslot
        @slot('title') Setting @endslot
    @endcomponent
<div class="row">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5>Basic Info</h5>

                </div>
                <div class="col-md-6">
                    <div class="my-page">
                        <form id="myForm" class="custom-validation">
                            @csrf
                            <h5 class="text-center">Identity Verification</h5>
                            <div class="picture-container">
                                <div class="picture">
                                    <img src="{{ isset(Auth::user()->avatar) ? '' : asset('/images/user_avatar.png') }}" class="picture-src" id="wizardPicturePreview" title="">
                                    <input type="file" id="wizard-picture" name="file" class="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <label class="form-label">Mobile</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input id="input-mask" class="form-control input-mask" data-inputmask="'mask': '999-9999-999'" placeholder="000-0000-000"  required>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <label class="form-label">Official Document</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                                <input type="file" class="form-control" id="inputGroupFile01" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <label class="form-label">Real Person Social media URL</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input parsley-type="url" type="url" class="form-control" required placeholder="https://" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button class="btn btn-success btn-rounded" type="submit">Request Verification</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')    
    <!-- form mask -->
    <script src="{{ URL::asset('/assets/libs/inputmask/inputmask.min.js') }}"></script>
    <!-- form mask init -->
    <script src="{{ URL::asset('/assets/js/pages/form-mask.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/form-validation.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/user/setting/index.js') }}"></script>
@endsection