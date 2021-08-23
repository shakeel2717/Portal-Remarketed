@extends('admin.dashboard.layout.app')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="row gx-2 gx-lg-3">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Insert New Device</h2>
                </div>
                <div class="card-body text-center">
                    <h2>Add a New Device into system</h2>
                    <img class="mb-3" src="{{ asset('assets/svg/illustrations/click.svg') }}" alt="Add Device"
                        width="150">
                    <form action="{{ route('addDeviceReq') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="brand">Brand Name</label>
                                    <input type="text" name="brand" id="brand" class="form-control"
                                        placeholder="Type Brand of Device">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Device Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Type Device Name of Device">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="appearance">Appearance</label>
                                    <input type="text" name="appearance" id="appearance" class="form-control"
                                        placeholder="Type Appearance of Device">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="qty">Device Color</label>
                                    <select class="js-select2-custom custom-select" name="color" id="color" size="1"
                                        style="opacity: 0;">
                                        @forelse ($colors as $color)
                                            <option value="{{ $color->value }}">{{ $color->value }}
                                            </option>
                                        @empty
                                            <option value="">No Record Found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="qty">Boxed</label>
                                    <select class="js-select2-custom custom-select" name="boxed" id="boxed" size="1"
                                        style="opacity: 0;">
                                        @forelse ($boxes as $box)
                                            <option value="{{ $box->value }}">{{ $box->value }}
                                            </option>
                                        @empty
                                            <option value="">No Record Found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="additional-info">Additional Info</label>
                                    <input type="text" name="additional-info" id="additional-info" class="form-control"
                                        placeholder="Type Additional Info of Device">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="qty">Functionality</label>
                                    <select class="js-select2-custom custom-select" name="functionality" id="functionality"
                                        size="1" style="opacity: 0;">
                                        @forelse ($functionalities as $functionality)
                                            <option value="{{ $functionality->value }}">{{ $functionality->value }}
                                            </option>
                                        @empty
                                            <option value="">No Record Found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="qty">Quantity</label>
                                    <input type="text" name="qty" id="qty" class="form-control"
                                        placeholder="Type Quantity of Device">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" name="price" id="price" class="form-control"
                                        placeholder="Type Price of Device">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
