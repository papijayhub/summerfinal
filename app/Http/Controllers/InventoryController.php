<?php

namespace App\Http\Controllers;
use App\Models\Inventory;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index(){
        $inventory = Inventory::with('track')->get();
        return inertia('Inventory',[
            'inventory' =>$inventory
        ]);
    }
}
