@extends('dashboard.layout.app')
@section('title')
    Dashboard
@endsection
@section('content')
    <x-draft-orders :allDevices="$allDevices" />
@endsection