@extends('dashboard.layout.app')
@section('title')
    Dashboard
@endsection
@section('content')
    <x-orders-nav />
    <x-quote-order :orderDetail="$orderDetail" />
    {{-- <x-draft-orders :allDevices="$allDevices" /> --}}
@endsection
