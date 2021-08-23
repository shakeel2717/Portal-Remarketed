<?php

namespace App\Http\Controllers;

use App\Models\device;
use App\Models\order;
use App\Models\users;
use Carbon\Carbon;
use Illuminate\Http\Request;

class dashboard extends Controller
{
    public function index()
    {
        $query = device::get();
        return view('dashboard.index', [
            'allDevices' => $query,
        ]);
    }
}
