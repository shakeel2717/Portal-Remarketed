<?php

namespace App\Http\Controllers;

use App\Models\boxed;
use App\Models\color;
use App\Models\device;
use App\Models\functionality;
use App\Models\order;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function addDevice()
    {
        return view("admin.dashboard.addDevice", [
            'colors' => color::get(),
            'functionalities' => functionality::get(),
            'boxes' => boxed::get(),
        ]);
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
        return redirect()->back()->with('message', 'New Device Added into System Successfully');
    }



    public function devicesWorking()
    {
        $workingDevice = device::where('functionality', 'Working')->get();

        return view('dashboard.devices.working', [
            'workingDevices' => $workingDevice,
            'orders' => order::get(),
        ]);
    }



    public function devicesRefurbishing()
    {
        $refurbishingDevice = device::where('functionality','Minor Fault')->get();
        return view('dashboard.devices.refurbishing', [
            'refurbishingDevices' => $refurbishingDevice,
            'orders' => order::get(),
        ]);
    }


    public function devicesmotherboard()
    {
        $motherboardDevices = device::where('appearance','Motherboard')->get();
        return view('dashboard.devices.motherboard', [
            'motherboardDevices' => $motherboardDevices,
            'orders' => order::get(),
        ]);
    }
}
