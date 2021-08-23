@extends('admin.dashboard.layout.app')
@section('title')
    Functionality
@endsection
@section('content')
    <div class="row gx-2 gx-lg-3">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Insert New Functionality</h2>
                </div>
                <div class="card-body text-center">
                    <h2>Add a New Functionality into system</h2>
                    <img class="mb-3" src="{{ asset('assets/svg/illustrations/click.svg') }}" alt="Add Device"
                        width="150">
                    <form action="{{ route('addFunctionalityReq') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="brand">Functionality Name</label>
                                    <input type="text" name="functionality" id="functionality" class="form-control"
                                        placeholder="Type Functionality of Device">
                                </div>
                            </div>
                        </div>
                        <div class="row">
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
        <div class="col-md-8">
            <!-- Card -->
            <div class="card">
                <div class="card-header">
                    <h4 class="card-header-title">Functionalities</h4>
                </div>
                <!-- Table -->
                <div class="table-responsive">
                    <table class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($functionalities as $functionality)
                                <tr>
                                    <td>{{ $loop->iteration }} </td>
                                    <td>{{ $functionality->value }} </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- End Table -->
            </div>
            <!-- End Card -->
        </div>
    </div>
@endsection
