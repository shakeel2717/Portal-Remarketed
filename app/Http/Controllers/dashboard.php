<?php

namespace App\Http\Controllers;

use App\Models\device;
use App\Models\users;
use Carbon\Carbon;
use Illuminate\Http\Request;

class dashboard extends Controller
{
    public function index()
    {
        $query = users::get();
        return view('dashboard.index', [
            'allDevices' => $query,
        ]);
    }
}
