@extends('dashboard.layout.app')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <x-email-alert />
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @forelse ($allDevices as $device)
                <div class="col mb-3">
                    <div class="card card-body">
                        <div class="media align-items-md-center">
                            <div class="media-body">
                                <div class="row align-items-md-center">
                                    <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                                        <h4 class="mb-1">
                                            <a class="text-dark" href="#">Dell Xr3k</a>
                                        </h4>
                                        <span class="d-block">
                                            <i class="tio-company mr-1"></i>
                                            <span>Dell</span>
                                        </span>
                                    </div>
                                    <div class="col-sm mb-2 mb-sm-0">
                                        <h4 class="mb-1">
                                            <a class="text-dark" href="#">Appearnce</a>
                                        </h4>
                                        <span class="d-block">
                                            <i class="tio-company mr-1"></i>
                                            <span>Grade A</span>
                                        </span>
                                    </div>
                                    <div class="col-sm mb-2 mb-sm-0">
                                        <h4 class="mb-1">
                                            <a class="text-dark" href="#">Functionality</a>
                                        </h4>
                                        <span class="d-block">
                                            <i class="tio-company mr-1"></i>
                                            <span>Working</span>
                                        </span>
                                    </div>
                                    <div class="col-sm mb-2 mb-sm-0">
                                        <h4 class="mb-1">
                                            <a class="text-dark" href="#">Boxed</a>
                                        </h4>
                                        <span class="d-block">
                                            <i class="tio-company mr-1"></i>
                                            <span>Original Box</span>
                                        </span>
                                    </div>
                                    <div class="col-sm mb-2 mb-sm-0">
                                        <h4 class="mb-1">
                                            <a class="text-dark" href="#">Color</a>
                                        </h4>
                                        <span class="d-block">
                                            <i class="tio-company mr-1"></i>
                                            <span>Red</span>
                                        </span>
                                    </div>
                                    <div class="col-sm-auto">
                                        <a class="btn btn-primary">Add Draft</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <h2 class="text-center">Sorry, No Device Found!</h2>
            @endforelse
        </div>
    </div>
@endsection
