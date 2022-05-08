@extends('user.layouts.master-layouts')

@section('title') Setting @endsection
@section('css')
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') User @endslot
        @slot('title') Setting @endslot
    @endcomponent

@endsection
@section('script')    