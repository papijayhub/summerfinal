<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
               'borrower' => 'Yuko Nah',
               'leasefee' => '160',
               'address' => 'Ohayo Japan',
               'daterent' => Carbon::now(),
               'returndue' => '1900-01-04'
               ],
               [
                'inventory_id' => 2,
               'borrower' => 'Josh Tokita',
               'leasefee' => '143',
               'address' => 'datedate',
               'daterent' => Carbon::now(),
               'returndue' => '1900-01-05'
               ],
               [
                'inventory_id' => 3,
               'borrower' => 'John Kamali',
               'leasefee' => '154',
               'address' => 'datedate',
               'daterent' => Carbon::now(),
               'returndue' => '1900-01-06'
               ]
            ];
            foreach($track as $is) {
                \App\Models\Tracking::create($is);
            }
    }
}
