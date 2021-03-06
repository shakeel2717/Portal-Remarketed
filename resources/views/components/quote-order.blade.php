<div class="row">
    <div class="col-12">
        @forelse ($orderDetail->where('status','Quote') as $detail)
            <div class="col mb-3">
                <div class="card card-body">
                    <div class="media align-items-md-center">
                        <div class="media-body">
                            <div class="row align-items-md-center">
                                <div class="col-9 col-md-4 col-lg-3 mb-2 mb-md-0">
                                    <span class="d-block">
                                        <span>Name</span>
                                    </span>
                                    <h4 class="mb-1">
                                        <a class="text-dark"
                                            href="{{ route('order.show', ['id' => $detail->id]) }}">{{ $detail->name }}</a>
                                    </h4>
                                </div>
                                <div class="col-sm mb-2 mb-sm-0">
                                    <span class="d-block">
                                        <span>Order Number</span>
                                    </span>
                                    <h4 class="mb-1">
                                        <a class="text-dark" href="#">{{ $detail->orderNumber }}</a>
                                    </h4>
                                </div>
                                <div class="col-sm mb-2 mb-sm-0">
                                    <span class="d-block">
                                        <span>Status</span>
                                    </span>
                                    <h4 class="mb-1">
                                        <a class="text-dark" href="#">{{ $detail->status }}</a>
                                    </h4>
                                </div>
                                <div class="col-sm mb-2 mb-sm-0">
                                    <span class="d-block">
                                        <span>Order Date</span>
                                    </span>
                                    <h4 class="mb-1">
                                        <a class="text-dark"
                                            href="#">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($detail->updated_at))->diffForHumans() }}</a>
                                    </h4>
                                </div>
                                <div class="col-sm mb-2 mb-sm-0">
                                    <span class="d-block">
                                        <span>Total Items</span>
                                    </span>
                                    <h4 class="mb-1">
                                        <a class="text-dark" href="#">{{ $detail->itemOrder->count() }}</a>
                                    </h4>
                                </div>
                                <div class="col-sm mb-2 mb-sm-0">
                                    <span class="d-block">
                                        <span>Amount</span>
                                    </span>
                                    <h4 class="mb-1">
                                        <a class="text-dark" href="#"><?php
$count = 0;
foreach ($detail->itemOrder as $totalCount) {
    $query = DB::table('devices')->find($totalCount->devices_id);
    $count = $count + $query->price;
}
?>
                                            {{ env('APP_CURRENCY_SYMBOL') }} {{ number_format($count, 2) }}
                                            {{ env('APP_CURRENCY') }}</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <h2 class="text-center">Sorry, No Order Found!</h2>
        @endforelse
    </div>
</div>
