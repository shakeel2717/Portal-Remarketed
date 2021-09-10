<div class="row">
    <div class="col-12">
        @forelse ($orderDetail as $detail)
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
                                            href="{{ route('orderShow', ['id' => $detail->id]) }}">{{ $detail->name }}</a>
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
                                        <span>Create Date</span>
                                    </span>
                                    <h4 class="mb-1">
                                        <a class="text-dark"
                                            href="#">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($detail->created_at))->diffForHumans() }}</a>
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
                                            {{ $count }}</a>
                                    </h4>
                                </div>
                                @if ($detail->status == 'Quote')
                                    <div class="col-sm-auto">
                                        <button class="btn btn-primary" data-toggle="modal"
                                            data-target="#updateOrderStatus{{ $loop->iteration }}">Update
                                            Order</button>
                                        <x-update-status-modal :loop="$loop" :detail="$detail" />
                                    </div>
                                @endif
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
