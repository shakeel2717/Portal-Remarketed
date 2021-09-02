@extends('dashboard.layout.app')
@section('title')
    Dashboard
@endsection
@section('content')
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
    <x-show-order :allDevices="$allDevices" />
    <x-checkout-modal :orders="$orders" :addresses="$addresses" />
@endsection
