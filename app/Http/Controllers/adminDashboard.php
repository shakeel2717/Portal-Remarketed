<?php

namespace App\Http\Controllers;

use App\Models\address;
use App\Models\itemOrder;
use App\Models\order;
use App\Models\Support;
use App\Models\users;
use Illuminate\Http\Request;

class adminDashboard extends Controller
{
    public function index()
    {

        return view('admin.dashboard.index', [
            'totalUsers' => users::get(),
        ]);
    }

    public function allUsers()
    {
        return view('admin.dashboard.allUsers', [
            'allUsers' => users::get(),
        ]);
    }

    public function allSupports()
    {
        return view('admin.dashboard.allSupports', [
            'allSupports' => Support::get(),
        ]);
    }


    public function allOrders()
    {
        $query = order::where('status', 'Draft')->get();
        return view('admin.dashboard.orders.allOrders', [
            'orderDetail' => $query,
        ]);
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
}
