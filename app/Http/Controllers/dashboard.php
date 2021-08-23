<?php

namespace App\Http\Controllers;

use App\Models\device;
use Carbon\Carbon;
use Illuminate\Http\Request;

class dashboard extends Controller
{
    public function index()
    {
        return view('dashboard.index',[
            'allDevices' => device::get(),
        ]);
    }

}
