@extends('dashboard.layout.app')
@section('title')
    Dashboard
@endsection
@section('content')
    <x-order-collection :orderDetail="$orderDetail" />
    {{-- <x-draft-orders :allDevices="$allDevices" /> --}}
@endsection
