<div class="modal fade" id="invoiceReceiptModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- Header -->
            <div class="modal-top-cover bg-dark text-center">
                <figure class="position-absolute right-0 bottom-0 left-0 ie-modal-curved-shape">
                    <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        viewBox="0 0 1920 100.1" style="margin-bottom: -2px;">
                        <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z" />
                    </svg>
                </figure>

                <div class="modal-close">
                    <button type="button" class="btn btn-icon btn-sm btn-ghost-light" data-dismiss="modal"
                        aria-label="Close">
                        <i class="tio-clear tio-lg"></i>
                    </button>
                </div>
            </div>
            <!-- End Header -->

            <div class="modal-top-cover-icon">
                <span class="icon icon-lg icon-light icon-circle icon-centered shadow-soft">
                    <i class="tio-receipt-outlined"></i>
                </span>
            </div>

            <!-- Body -->
            <div class="modal-body pt-3 pb-sm-5 px-sm-5">
                <div class="text-center mb-5">
                    <h2 class="mb-1">Checkout [{{ $orders->name }}]</h2>
                    <span class="d-block">Order #{{ $orders->orderNumber }}</span>
                </div>

                <div class="row mb-6">
                    <div class="col-md-4 mb-3">
                        <small class="text-cap">Total Price:</small>
                        <span class="text-dark">{{ env('APP_CURRENCY_SYMBOL') }}<?php
$count = 0;
foreach ($orders->itemOrder as $totalCount) {
    $query = DB::table('devices')->find($totalCount->devices_id);
    $count = $count + $query->price;
}
?>
                            {{ number_format($count, 2) }} {{ env('APP_CURRENCY') }}</span>
                    </div>

                    <div class="col-md-4 mb-3">
                        <small class="text-cap">Items in Order</small>
                        <span class="text-dark">{{ $orders->itemOrder->count() }}</span>
                    </div>

                    <div class="col-md-4 mb-3">
                        <small class="text-cap">Order time</small>
                        <span
                            class="text-dark">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($orders->created_at))->diffForHumans() }}</span>
                    </div>

                </div>

                <small class="text-cap mb-2">Items in Order</small>

                <form action="{{ route('checkout.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="address">Shipping Address</label>
                        <select name="address" id="address" class="form-control">
                            @foreach ($addresses as $address)
                                <option value="{{ $address->id }}">{{ $address->address }}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="hidden" name="orders_id" value="{{ $orders->id }}">
                    <div class="form-group">
                        <label class="input-label" for="exampleFormControlTextarea1">Order comment (Optional)</label>
                        <textarea id="exampleFormControlTextarea1" name="comment" class="form-control" placeholder="Type your comment"
                            rows="4" spellcheck="false"></textarea>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-dark">Request Offer</button>
                    </div>
                </form>
            </div>
            <!-- End Body -->
        </div>
    </div>
</div>
