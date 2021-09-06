@extends('admin.dashboard.layout.app')
@section('title')
    Dashboard
@endsection
@section('content')
    <x-update-order-status :orderDetail="$orderDetail" />
@endsection
