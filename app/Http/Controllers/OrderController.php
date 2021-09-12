<?php

namespace App\Http\Controllers;

use App\Models\address;
use App\Models\itemOrder;
use App\Models\offerDevice;
use App\Models\order;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

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
        $randNumber = Str::random(10);

        // inserting into database
        $task = new order();
        // if ($validated['offer'] != Null) {
        //     // inserting offer price
        //     $updateTask = new offerDevice();
        //     $updateTask->orderNumber = $randNumber;
        //     $updateTask->device_id = $validated['device_id'];
        //     $updateTask->amount = $validated['offer'];
        //     $updateTask->status = "Open";
        //     $updateTask->save();
        //     $task->status = "Reserved";
        //     $task->type = "Offer";
        // }

        $task->name = $validated['orderName'];
        $task->users_id = session('user')[0]->id;
        $task->devices_id = $validated['device_id'];
        $task->orderNumber = $randNumber;
        $task->save();
        $orderId = $task->id;

        // inserting Item Order
        $task = new itemOrder();
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
            'offer' => 'nullable|string',
        ]);

        // checking if this Order belong to a non offer Order.
        $query = order::findOrFail($validated['orderId']);
        // if ($validated['offer'] != Null) {
        //     // if ($query->type != "Offer") {
        //     //     return redirect()->back()->withErrors('Please Create new Order or Select Order who belong to Offers');
        //     // }

        //     
        // } else {
        //     if ($query->type != "Direct") {
        //         return redirect()->back()->withErrors('Please Create new Order or Select Order who not belong to Offers');
        //     }
        // }

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

    public function offerPriceReq(Request $request)
    {
        $validated = $request->validate([
            'orderId' => 'required|integer',
            'device_id' => 'required|integer',
            'offer' => 'nullable|string',
        ]);
        // inserting offer price
        $updateTask = new offerDevice();
        $updateTask->users_id = session('user')[0]->id;
        $updateTask->orderNumber = $validated['orderId'];
        $updateTask->device_id = $validated['device_id'];
        $updateTask->amount = $validated['offer'];
        $updateTask->status = "Open";
        $updateTask->save();
        return redirect()->back()->with('message', 'Your Custom Offer Request in Under Review');
    }
}
