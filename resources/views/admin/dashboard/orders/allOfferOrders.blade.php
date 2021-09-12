@extends('admin.dashboard.layout.app')
@section('title')
    Dashboard
@endsection
@section('content')
    <x-admin-orders :orderDetail="$orderDetail" />
@endsection