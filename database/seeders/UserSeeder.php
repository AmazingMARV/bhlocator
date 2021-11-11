<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = [
            [
                'username' => 'eshen',
                'email' => 'et@yahoo.com',
                'password' => Hash::make('1234'),
                'lname' => 'AMPARADO',
                'fname' => 'ETIENNE',
                'mname' => '',
                'suffix' => '',
                'sex' => 'MALE',
                'contact_no' => '9167789585',
                'business_permit_img' => '',
                'province' => '1042',
                'city' => '104215',
                'barangay' => '104215025',
                'street' => 'P-BOUGAINVILLA',
                'role' => 'OWNER',
                'is_approve' => 1,
                'is_pending' => 0

            ],
            [
                'username' => 'alab',
                'email' => 'alab@yahoo.com',
                'password' => Hash::make('1234'),
                'lname' => 'ALAB    ',
                'fname' => 'MARV',
                'mname' => '',
                'suffix' => '',
                'sex' => 'MALE',
                'contact_no' => '9167789584',
                'business_permit_img' => '1234-234',
                'province' => '1042',
                'city' => '104215',
                'barangay' => '104215025',
                'street' => 'P-BOUGAINVILLA',
                'role' => 'CLIENT',
                'is_approve' => 0,
                'is_pending' => 0


            ],
            [
                'username' => 'admin',
                'email' => 'admin@yahoo.com',
                'password' => Hash::make('1234'),
                'lname' => 'ADMIN',
                'fname' => 'ADMIN1',
                'mname' => '',
                'suffix' => '',
                'sex' => 'MALE',
                'contact_no' => '123412',
                'business_permit' => '1234-232',
                'province' => '12343',
                'city' => '12342',
                'barangay' => '12165489',
                'street' => 'P-BOUGAINVILLA',
                'role' => 'ADMINISTRATOR',
                'is_approve' => 0,
                'is_pending' => 0

                
            ]
        ];

        User::insertOrIgnore($user);
    }
}
