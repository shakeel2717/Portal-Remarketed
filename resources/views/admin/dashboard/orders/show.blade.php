@extends('admin.dashboard.layout.app')
@section('title')
    Dashboard
@endsection
@section('content')
    <x-show-order :allDevices="$allDevices" />
@endsection
