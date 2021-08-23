@extends('dashboard.layout.app')
@section('title')
    Dashboard
@endsection
@section('content')
    <x-allDevices :allDevices="$allDevices" />
@endsection
