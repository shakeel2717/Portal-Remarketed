@extends('dashboard.layout.app')
@section('title')
    Dashboard
@endsection
@section('content')
    <x-all-devices :allDevices="$allDevices" :orders="$orders"/>
@endsection
