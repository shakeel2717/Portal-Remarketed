<?php

namespace App\Http\Controllers;

use App\Models\boxed;
use App\Models\color;
use App\Models\functionality;
use Illuminate\Http\Request;

class FunctionalityController extends Controller
{
    public function addFunctionality()
    {
        return view('admin.dashboard.extra.functionality', [
            'functionalities' => functionality::get(),
        ]);
    }


    public function addFunctionalityReq(Request $request)
    {
        $validated = $request->validate([
            'functionality' => 'required'
        ]);

        // inserting into database
        $task = new functionality();
        $task->value = $validated['functionality'];
        $task->save();
        return redirect()->back()->with('message', 'New Functionality Added into System Successfully');
    }



    public function addColors()
    {
        return view('admin.dashboard.extra.colors', [
            'colors' => color::get(),
        ]);
    }


    public function addColorsReq(Request $request)
    {
        $validated = $request->validate([
            'color' => 'required'
        ]);

        // inserting into database
        $task = new color();
        $task->value = $validated['color'];
        $task->save();
        return redirect()->back()->with('message', 'New Colors Added into System Successfully');
    }


    public function addBoxes()
    {
        return view('admin.dashboard.extra.boxeds', [
            'boxes' => boxed::get(),
        ]);
    }


    public function addBoxesReq(Request $request)
    {
        $validated = $request->validate([
            'boxes' => 'required'
        ]);

        // inserting into database
        $task = new boxed();
        $task->value = $validated['boxes'];
        $task->save();
        return redirect()->back()->with('message', 'New Boxeds Added into System Successfully');
    }
}
