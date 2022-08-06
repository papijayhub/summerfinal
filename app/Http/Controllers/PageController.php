<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class PageController extends Controller
{
    public function home(){
        return inertia('Home');
    }
    public function track(){
        $inventory = Inventory::with('track')->get();
        return inertia('Track',[
            'inventory' => $inventory
        ]);
    }
    public function about(){
        return inertia('About');
    }
    public function contact(){
        return inertia('Contact');
    }
}
