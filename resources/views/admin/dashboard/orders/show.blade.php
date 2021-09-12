@extends('admin.dashboard.layout.app')
@section('title')
    Dashboard
@endsection
@section('content')
    <x-show-order-admin :allDevices="$allDevices" :order="$orders->id" />
@endsection
