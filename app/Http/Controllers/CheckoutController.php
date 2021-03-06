<?php

namespace App\Http\Controllers;

use App\Models\checkout;
use App\Models\notification;
use App\Models\offerDevice;
use App\Models\order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'orders_id' => 'required|integer',
            'address' => 'required|integer',
            'comment' => 'required|string|nullable',
        ]);

        // inserting new Notification
        $task = new notification();
        $task->users_id = session('user')[0]->id;
        $task->title = "Order Reqeust in Review";
        $username = session('user')[0]->username;
        $task->value = "Dear $username  Your Order Request are successfully submitted and currently under review, you will get notify once your Request Approved";
        $task->save();

        $task = new checkout();
        $task->orders_id = $request->input('orders_id');
        $task->address_id = $request->input('address');
        $task->comment = $request->input('comment');
        $task->save();

        // updating the status of Order
        $task = order::find($validated['orders_id']);
        $task->status = "Quote";
        $task->save();
        return redirect()->back()->with('message', 'Checkout Request is now Under Review');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show(checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(checkout $checkout)
    {
        //
    }


    public function offerDeviceReq(Request $request)
    {
        $validated = $request->validate([
            'device_id' => 'required|integer',
            'offer' => 'required|string',
        ]);
        // inserting this Order into Database
        $task = new offerDevice();
        $task->device_id = $validated['device_id'];
        $task->amount = $validated['offer'];
        $task->save();
        return redirect()->back()->with('message', 'Success');

    }
}
