@extends('admin.layouts.master')

@section('title') @lang('translation.Dashboards') @endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1') TS EDTECH @endslot
        @slot('title') Dashboards @endslot
    @endcomponent
@endsection
@section('script')

@endsection
