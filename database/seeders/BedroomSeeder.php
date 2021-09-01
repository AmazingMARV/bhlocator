<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BedroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $bedroom = [
            [
                'bedroom_id' => 1,
                'bhouse_id' => 1,
                'bedroom_name' => 'ET BHOUSE1',
                'bed_amenities' => 'BED SIZE IS 32inch and 45in blah blah blah. Good for 1 person only',
                'bed_img' => '',
                'price' => '750',
                'is_available' => '1',

            ],

            [
                'bedroom_id' => 1,
                'bhouse_id' => 1,
                'bedroom_name' => 'ET BHOUSE2',
                'bed_amenities' => 'BED SIZE IS 32inch and 45in blah blah blah. Good for 2 person only',
                'bed_img' => '',
                'price' => '500',
                'is_available' => '1',

            ]
        ];

        Bedroom::insertOrIgnore($bhouse);
    }
}
