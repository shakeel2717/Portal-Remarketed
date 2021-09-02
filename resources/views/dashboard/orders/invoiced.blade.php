@extends('dashboard.layout.app')
@section('title')
    Dashboard
@endsection
@section('content')
    <x-orders-nav />
    <x-order-collection :orderDetail="$orderDetail" />
@endsection
