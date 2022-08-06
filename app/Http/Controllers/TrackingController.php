<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function index(){
        $inventory = Inventory::with('track')->get();
        return inertia('Track',[
            'inventory' => $inventory
        ]);
    }
}
