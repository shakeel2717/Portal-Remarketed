@extends('admin.dashboard.layout.app')
@section('title')
    Boxes
@endsection
@section('content')
    <div class="row gx-2 gx-lg-3">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Insert New Boxes</h2>
                </div>
                <div class="card-body text-center">
                    <h2>Add a New Boxes into system</h2>
                    <img class="mb-3" src="{{ asset('assets/svg/illustrations/click.svg') }}" alt="Add Device"
                        width="150">
                    <form action="{{ route('addBoxesReq') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="brand">Boxes Name</label>
                                    <input type="text" name="boxes" id="boxes" class="form-control"
                                        placeholder="Type Boxes of Device">
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
                    <h4 class="card-header-title">Boxes</h4>
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
                            @foreach ($boxes as $box)
                                <tr>
                                    <td>{{ $loop->iteration }} </td>
                                    <td>{{ $box->value }} </td>
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
