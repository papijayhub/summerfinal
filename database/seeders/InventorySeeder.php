<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inventory = [
            [
                'name' => 'Shein Clothing',
                'type' => 'Suit',
                'size' => 'Medium',
                'description' => 'This particular suit is very thick',
            ],
            [
                'name' => 'Shein Clothing',
                'type' => 'Suit',
                'size' => 'Medium',
                'description' => 'This particular suit is very thick',
            ],
            [
                'name' => 'NJM Clothing',
                'type' => 'Skirt',
                'size' => 'Small',
                'description' => 'This particular skirt is revealing',
            ]
        ];
        foreach($inventory as $i) {
            \App\Models\Inventory::create($i);
        }
    }
}
