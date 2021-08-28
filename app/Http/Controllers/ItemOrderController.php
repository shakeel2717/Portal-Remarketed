<?php

namespace App\Http\Controllers;

use App\Models\itemOrder;
use Illuminate\Http\Request;

class ItemOrderController extends Controller
{
    public function deviceDestory($id)
    {
        $task = itemOrder::find($id);
        $task->delete();
        return redirect()->back()->with('message', 'Device Removed from Order Successfully');
    }
}
