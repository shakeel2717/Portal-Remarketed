@extends('dashboard.layout.app')
@section('title')
    Dashboard
@endsection
@section('content')
    <body data-offset="0" data-hs-scrollspy-options='{ "target": "#navbarSettings" }'>
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Add new Address</h2>
                        <hr>
                        <form action="{{ route('address.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="company">Company Name</label>
                                <input type="text" name="company" id="company" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" id="address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="contact">Contact Name</label>
                                <input type="text" name="contact" id="contact" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Save New Address</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <!-- Card -->
                <div id="recentDevicesSection" class="card mb-3 mb-lg-5">
                    <div class="card-header">
                        <h4 class="card-title">Shipping address</h4>
                    </div>

                    <!-- Body -->
                    <div class="card-body">
                        <p class="card-text">View and manage Shipping address Belongs to your account.</p>
                    </div>
                    <!-- End Body -->

                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-thead-bordered table-nowrap table-align-middle card-table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Company</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Contact</th>
                                    <th>Status</th>
                                    <th>Date Create</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($addresses->address as $address)
                                    <tr>
                                        <td>{{ $address->company }}</td>
                                        <td>{{ $address->address }}</td>
                                        <td>{{ $address->phone }}</td>
                                        <td>{{ $address->contact }}</td>
                                        <td>{{ $address->status }}</td>
                                        <td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($address->created_at))->diffForHumans() }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table -->
                </div>
            </div>
        </div>
        <!-- End Card -->

        <!-- Sticky Block End Point -->
        <div id="stickyBlockEndPoint"></div>
        </div>
        </div>
        <!-- End Row -->
    @endsection
    @section('footer')
        <!-- JS Implementing Plugins -->
        <script src="{{ asset('assets/vendor/hs-sticky-block/dist/hs-sticky-block.min.js') }}"></script>

    @endsection
