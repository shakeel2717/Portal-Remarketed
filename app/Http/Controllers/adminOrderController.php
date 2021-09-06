<?php

namespace App\Http\Controllers;

use App\Models\address;
use App\Models\itemOrder;
use App\Models\order;
use Illuminate\Http\Request;

class adminOrderController extends Controller
{
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


    public function allShipOrders()
    {
        $query = order::where('status', 'Shipped')->get();
        return view('admin.dashboard.orders.allShipOrders', [
            'orderDetail' => $query,
        ]);
    }
}
