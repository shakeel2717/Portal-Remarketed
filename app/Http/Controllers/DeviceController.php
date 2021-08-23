<?php

namespace App\Http\Controllers;

use App\Models\device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function addDevice()
    {
        return view("admin.dashboard.addDevice");
    }

    public function addDeviceReq(Request $request)
    {
        $validated = $request->validate([
            'brand' => 'required',
            'name' => 'required',
            'appearance' => 'required',
            'color' => 'required',
            'boxed' => 'required',
            'functionality' => 'required',
            'additional-info' => 'nullable',
            'qty' => 'nullable',
            'price' => 'required',
        ]);
        $task = new device();
        $task->brand = $validated['brand'];
        $task->name = $validated['name'];
        $task->appearance = $validated['appearance'];
        $task->functionality = $validated['functionality'];
        $task->color = $validated['color'];
        $task->boxed = $validated['boxed'];
        $task->additionalInfo = $validated['additional-info'];
        $task->qty = $validated['qty'];
        $task->price = $validated['price'];
        $task->save();
        return redirect()->back()->with('message','New Device Added into System Successfully');
    }


    


    
}
