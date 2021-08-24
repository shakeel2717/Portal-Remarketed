@extends('dashboard.layout.app')
@section('title')
    Dashboard
@endsection
@section('content')
    <x-device-nav />
    <x-all-devices :allDevices="$refurbishingDevices" :orders="$orders" />
@endsection
