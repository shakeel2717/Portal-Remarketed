<div class="row">
    <div class="col-12">
        @forelse ($allDevices as $device)
            @php
                $query = DB::table('offer_devices')
                    ->where('device_id', $device->id)
                    ->where('users_id', session('user')[0]->id)
                    ->get();
            @endphp
            <div class="col mb-3">
                <div class="card card-body {{ count($query) > 0 && $query[0]->final != '' ? 'border-warning' : '' }}">
                    <div class="media align-items-md-center">
                        <div class="media-body">
                            <div class="row d-flex justify-content-around">
                                <div class="content">
                                    <h4 class="mb-1">
                                        <a class="text-dark" href="#">{{ $device->name }}</a>
                                    </h4>
                                    <span class="d-block">
                                        <i class="tio-company mr-1"></i>
                                        <span>{{ $device->brand }}</span>
                                    </span>
                                </div>
                                <div class="content">
                                    <h4 class="mb-1">
                                        <a class="text-dark" href="#">Appearnce</a>
                                    </h4>
                                    <span class="d-block">
                                        <i class="tio-company mr-1"></i>
                                        <span>{{ $device->appearance }}</span>
                                    </span>
                                </div>
                                <div class="content">
                                    <h4 class="mb-1">
                                        <a class="text-dark" href="#">Functionality</a>
                                    </h4>
                                    <span class="d-block">
                                        <i class="tio-company mr-1"></i>
                                        <span>{{ $device->functionality }}</span>
                                    </span>
                                </div>
                                <div class="content">
                                    <h4 class="mb-1">
                                        <a class="text-dark" href="#">Boxed </a>
                                    </h4>
                                    <span class="d-block">
                                        <i class="tio-company mr-1"></i>
                                        <span>{{ $device->boxed }}</span>
                                    </span>
                                </div>
                                <div class="content">
                                    <h4 class="mb-1">
                                        <a class="text-dark" href="#">Color </a>
                                    </h4>
                                    <span class="d-block">
                                        <i class="tio-company mr-1"></i>
                                        <span>{{ $device->color }}</span>
                                    </span>
                                </div>
                                <div class="content">
                                    <h4 class="mb-1">
                                        <a class="text-dark" href="#">Price</a>
                                    </h4>
                                    <span class="d-block">
                                        <i class="tio-company mr-1"></i>
                                        <span>{{ env('APP_CURRENCY') }}
                                            {{ number_format($device->price) }}</span>
                                    </span>
                                </div>
                                <div class="content">
                                    @if (count($query) > 0)
                                        <div class="col-sm-12 col-md-auto">
                                            <h4 class="mb-1">
                                                <a class="text-dark" href="#">Offer</a>
                                            </h4>
                                            <span class="d-block">
                                                <i class="tio-company mr-1"></i>
                                                <span>{{ env('APP_CURRENCY') }}
                                                    {{ number_format($query[0]->amount) }}</span>
                                            </span>
                                        </div>
                                    @else
                                        <div class="col-sm-12 col-md-auto">
                                            <h4 class="mb-1">
                                                <a class="text-dark" href="#">Offer</a>
                                            </h4>
                                            <span class="d-block">
                                                <i class="tio-company mr-1"></i>
                                                <span>No Offer</span>
                                            </span>
                                        </div>
                                    @endif
                                </div>
                                <div class="content text-warning">
                                    @if (count($query) > 0 && $query[0]->final != '')
                                        <div class="col-sm-12 col-md-auto">
                                            <h4 class="mb-1">
                                                <a class="text-dark" href="#">Final Price</a>
                                            </h4>
                                            <span class="d-block">
                                                <i class="tio-company mr-1"></i>
                                                <span>{{ env('APP_CURRENCY') }}
                                                    {{ number_format($query[0]->final) }}</span>
                                            </span>
                                        </div>
                                    @endif
                                </div>
                                @if (count($query) < 1)
                                    <div class="content">
                                        <form action="{{ route('offerPriceReq') }}" method="POST">
                                            @csrf
                                            <!-- Input Group -->
                                            <div class="input-group w-75">
                                                <input name="offer" type="text" class="form-control"
                                                    placeholder="Offer Eg:200">
                                                <input type="hidden" name="device_id" id="device_id"
                                                    value="{{ $device->id }}">
                                                <input type="hidden" name="orderId" id="orderId"
                                                    value="{{ $order }}">
                                                <div class="input-group-append">
                                                    <button type="submit" class="js-clipboard btn btn-primary">
                                                        <i id="referralCodeIcon" class="tio-sort"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- End Input Group -->
                                        </form>
                                    </div>
                                @endif
                                <div class="content">
                                    <a href="{{ route('deviceDestory', ['id' => $device->id]) }}"
                                        class="btn btn-danger ml-1">Remove</a>
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
