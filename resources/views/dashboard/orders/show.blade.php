@extends('dashboard.layout.app')
@section('title')
    Dashboard
@endsection
@section('content')
    @if ($orders->status == "Draft")
        <div class="row">
            <div class="col-md-12">
                <div class="text-right">
                    <a class="btn btn-dark" href="javascript:;" data-toggle="modal" data-target="#invoiceReceiptModal">
                        Checkout Order
                    </a>
                </div>
            </div>
        </div>
        <hr>
    @endif
    <x-show-order :allDevices="$allDevices" :orders="$orders" />
    <x-checkout-modal :orders="$orders" :addresses="$addresses" />
@endsection
