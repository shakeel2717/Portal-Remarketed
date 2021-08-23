<?php

namespace App\Http\Controllers;

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
        ]);

        // inserting into database
        $task = new order();
        $task->users_id = session('user')[0]->id;
        $task->devices_id = $validated['device_id'];
        $task->orderNumber = Str::random(3);
        $task->save();
        return redirect()->back()->with('message','Order Created Successfully');
    }
}
