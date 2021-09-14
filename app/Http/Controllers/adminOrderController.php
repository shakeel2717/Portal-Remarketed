<?php

namespace App\Http\Controllers;

use App\Models\address;
use App\Models\device;
use App\Models\itemOrder;
use App\Models\offerDevice;
use App\Models\order;
use Illuminate\Http\Request;

class adminOrderController extends Controller
{


    public function orderStatusRequest(Request $request)
    {
        $validated = $request->validate([
            'status' => 'required|string',
            'order_id' => 'required|integer',
            'tracking' => 'required|string',
        ]);

        $task = order::find($validated['order_id']);
        $task->status = "Shipped";
        $task->tracking = $validated['tracking'];
        $task->save();
        return redirect()->back()->with('message', 'Order Status Changed Successfully');
    }


    public function orderShow($id)
    {
        $allDevices = itemOrder::where('order_id', $id)
            ->leftJoin('devices', 'devices.id', '=', 'item_orders.devices_id')
            ->select('devices.*')
            ->get();
        // getting order detail
        $orders = order::find($id);
        $addresses = address::where('users_id', session('user')[0]->id)->get();
        return view('admin.dashboard.orders.show', [
            'allDevices' => $allDevices,
            'orders' => $orders,
            'addresses' => $addresses,
        ]);
    }


    public function allOrders()
    {
        $query = order::get();
        return view('admin.dashboard.orders.allOrders', [
            'orderDetail' => $query,
        ]);
    }


    public function allQuoteOrders()
    {
        $query = order::where('status', 'Quote')->get();
        return view('admin.dashboard.orders.allQuoteOrders', [
            'orderDetail' => $query,
        ]);
    }


    public function allOfferOrders()
    {
        $query = order::where('status', "Quote")->get();
        return view('admin.dashboard.orders.allOfferOrders', [
            'orderDetail' => $query,
        ]);
    }


    public function allOfferOrdersReq(Order $id)
    {
        // accpeting this Order
        // getting all Item Orders in this Order
        $itemOrders = itemOrder::where('order_id', $id->id)->get();
        // return $itemOrders;
        foreach ($itemOrders as $itemOrder) {
            // checking if this is a not a Offered Order
            $offeredQuery = offerDevice::where('orderNumber', $itemOrder->id)->get();
            if (count($offeredQuery) < 1) {
                goto skipPriceChange;
            }
            // getting offer Price for this device
            $offerDevice = offerDevice::where('device_id', $itemOrder->devices_id)->first();
            // updating this Device Price
            $device = device::find($itemOrder->devices_id);
            $device->price = $offerDevice->amount;
            $device->save();
            skipPriceChange:
        }
        // updating this Order Status
        $order = order::find($id->id);
        $order->status = "Shipped";
        $order->save();
        return redirect()->back()->with('message', 'Offer Accepted, All Devices Price Changed');
    }

    public function allShipOrders()
    {
        $query = order::where('status', 'Shipped')->get();
        return view('admin.dashboard.orders.allShipOrders', [
            'orderDetail' => $query,
        ]);
    }


    public function allDraftOrders()
    {
        $query = order::where('status', 'Draft')->get();
        return view('admin.dashboard.orders.allDraftOrders', [
            'orderDetail' => $query,
        ]);
    }

    public function orderRequest()
    {
        $query = order::where('status', 'Quote')->get();
        return view('admin.dashboard.orders.orderRequest', [
            'orderDetail' => $query,
        ]);
    }


    public function offerFinalPriceReq(Request $request)
    {
        $validated = $request->validate([
            'offer' => 'required|string',
            'offerId' => 'required|string',
        ]);
        // inserting this Order into Database
        $task = offerDevice::find($validated['offerId']);
        $task->final = $validated['offer'];
        $task->status = "Alert";
        $task->save();
        return redirect()->back()->with('message', 'Success');
    }
    
    public function finalacceptReq($id)
    {
        $query = offerDevice::find($id);
        $query->amount = $query->final;
        $query->status = "Accpet";
        $query->save();
        return redirect()->back()->with('message', 'Final Price Accepted!');
    }
}
