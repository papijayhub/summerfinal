<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrackingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $track = 
            [
               [
                'inventory_id' => 1,
               'time' => 'oneoclock',
               'day' => 'monday',
               'date' => 'waydate',
               'type' => 'gwapa',
               'amount' => 12.4
               ],
               [
                'inventory_id' => 2,
               'time' => 'eightoclock',
               'day' => 'sunday',
               'date' => 'datedate',
               'type' => 'sad boy',
               'amount' => 1.0
               ],
               [
                'inventory_id' => 3,
               'time' => 'eightoclock',
               'day' => 'sunday',
               'date' => 'datedate',
               'type' => 'sad boy',
               'amount' => 1.0
               ]
            ];
            foreach($track as $is) {
                \App\Models\Tracking::create($is);
            }
    }
}
