<?php

namespace App\Http\Controllers;

use App\Models\address;
use App\Models\device;
use App\Models\itemOrder;
use App\Models\order;
use App\Models\users;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function orderReq(Request $request)
    {
        $validated = $request->validate([
            'orderName' => 'required|string|min:3',
            'device_id' => 'required|integer',
            'offer' => 'nullable|string',
            'orderId' => 'nullable|integer',
        ]);

        // inserting into database
        $task = new order();
        if ($validated['offer'] != Null) {
            $task->status = "Reserved";
        }

        $task->name = $validated['orderName'];
        $task->users_id = session('user')[0]->id;
        $task->devices_id = $validated['device_id'];
        $task->orderNumber = Str::random(10);
        $task->save();
        $orderId = $task->id;

        // inserting Item Order
        $task = new itemOrder();
        if ($validated['offer'] != Null) {
            $task->type = "Offer";
        }
        $task->users_id = session('user')[0]->id;
        $task->devices_id = $validated['device_id'];
        $task->order_id = $orderId;
        $task->save();


        return redirect()->back()->with('message', 'Order Created Successfully');
    }


    public function orderExistingReq(Request $request)
    {
        $validated = $request->validate([
            'orderId' => 'required|integer',
            'device_id' => 'required|integer',
        ]);

        // inserting Item Order
        $task = new itemOrder();
        $task->users_id = session('user')[0]->id;
        $task->devices_id = $validated['device_id'];
        $task->order_id = $validated['orderId'];
        $task->save();
        return redirect()->back()->with('message', 'Order Created in Existing Order Successfully');
    }

    public function draftsOrders()
    {
        $query = order::where('status', 'Draft')->where('users_id', session('user')[0]->id)->get();
        return view('dashboard.orders.drafts', [
            'orderDetail' => $query,
        ]);
    }

    public function quoteOrders()
    {
        $query = order::where('status', 'Quote')->where('users_id', session('user')[0]->id)->get();
        return view('dashboard.orders.quote', [
            'orderDetail' => $query,
        ]);
    }

    public function reservedOrders()
    {
        $query = order::where('status', 'Reserved')->where('users_id', session('user')[0]->id)->get();
        return view('dashboard.orders.reserved', [
            'orderDetail' => $query,
        ]);
    }

    public function invoicedOrders()
    {
        $query = order::where('status', 'Shipped')->where('users_id', session('user')[0]->id)->get();
        return view('dashboard.orders.invoiced', [
            'orderDetail' => $query,
        ]);
    }


    public function OrdersDestory($id)
    {
        $task = order::find($id);
        $task->delete();
        return redirect()->back()->with('message', 'Order Removed Successfully');
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
        return view('dashboard.orders.show', [
            'allDevices' => $allDevices,
            'orders' => $orders,
            'addresses' => $addresses,
        ]);
    }
}
