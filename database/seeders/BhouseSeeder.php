<?php

namespace Database\Seeders;

use App\Models\Bhouse;
use Illuminate\Database\Seeder;

class BhouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $bhouse = [
            [
                'user_id' => 1,
                'bhouse_name' => 'ET BHOUSE1',
                'bhouse_desc' => 'BED SIZE IS 32inch and 45in blah blah blah. Good for 1 person only',
                'bhouse_img' => '',
                'bhouse_rule' => 'lorem lorem',
                'loc_description' => 'ET LOCATION',
                'loc_x' => 12.32546,
                'loc_y' => -8.5472
            ],

            [
                'user_id' => 1,
                'bhouse_name' => 'ET BHOUSE2',
                'bhouse_desc' => 'BED SIZE IS 32inch and 45in blah blah blah. Good for 2 person only',
                'bhouse_img' => '',
                'bhouse_rule' => 'lorem lorem',
                'loc_description' => 'ET LOCATION',
                'loc_x' => 12.32546,
                'loc_y' => -8.5472
            ]
        ];

        Bhouse::insertOrIgnore($bhouse);
    }
}
