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
                                        <a class="text-dark" href="#">{{ $device->name }}</a>
                                    </h4>
                                    <span class="d-block">
                                        <i class="tio-company mr-1"></i>
                                        <span>{{ $device->brand }}</span>
                                    </span>
                                </div>
                                <div class="col-sm mb-2 mb-sm-0">
                                    <h4 class="mb-1">
                                        <a class="text-dark" href="#">Appearnce</a>
                                    </h4>
                                    <span class="d-block">
                                        <i class="tio-company mr-1"></i>
                                        <span>{{ $device->appearance }}</span>
                                    </span>
                                </div>
                                <div class="col-sm mb-2 mb-sm-0">
                                    <h4 class="mb-1">
                                        <a class="text-dark" href="#">Functionality</a>
                                    </h4>
                                    <span class="d-block">
                                        <i class="tio-company mr-1"></i>
                                        <span>{{ $device->functionality }}</span>
                                    </span>
                                </div>
                                <div class="col-sm mb-2 mb-sm-0">
                                    <h4 class="mb-1">
                                        <a class="text-dark" href="#">Boxed </a>
                                    </h4>
                                    <span class="d-block">
                                        <i class="tio-company mr-1"></i>
                                        <span>{{ $device->boxed }}</span>
                                    </span>
                                </div>
                                <div class="col-sm mb-2 mb-sm-0">
                                    <h4 class="mb-1">
                                        <a class="text-dark" href="#">Color </a>
                                    </h4>
                                    <span class="d-block">
                                        <i class="tio-company mr-1"></i>
                                        <span>{{ $device->color }}</span>
                                    </span>
                                </div>
                                @php
                                    $orderDetail = DB::table('orders')->find($device->order_id);
                                @endphp
                                @if ($orderDetail->status == 'Reserved')
                                    <div class="col-sm mb-2 mb-sm-0">
                                        <h4 class="mb-1">
                                            <a class="text-dark" href="#">Offer Price</a>
                                        </h4>
                                        <span class="d-block">
                                            <i class="tio-company mr-1"></i>
                                            <span>{{ env('APP_CURRENCY') }}
                                                {{ number_format($device->offer) }}</span>
                                        </span>
                                    </div>
                                @endif
                                <div class="col-sm mb-2 mb-sm-0">
                                    <h4 class="mb-1">
                                        <a class="text-dark" href="#">Price</a>
                                    </h4>
                                    <span class="d-block">
                                        <i class="tio-company mr-1"></i>
                                        <span>{{ env('APP_CURRENCY') }} {{ number_format($device->price) }}</span>
                                    </span>
                                </div>
                                <div class="col-sm-auto">
                                    <a href="{{ route('deviceDestory', ['id' => $device->id]) }}"
                                        class="btn btn-danger">Remove</a>
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