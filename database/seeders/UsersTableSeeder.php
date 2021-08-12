<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'super',
                'email' => 'super@i-techrity.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GGJsZjvMFOYdyx1P8H99m.7cZAgOE7Zkksk3QuHih5RAIQDpzyhdG',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2021-08-09 12:39:49',
                'updated_at' => '2021-08-09 12:39:49',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 1,
                'name' => 'super',
                'email' => 'super@iblog.test',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$PFERMKS6KIKsR.Ln7LCvP.cSDK2q/AE1723ijdxtzyTR23roLd.Wm',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2021-08-12 08:46:00',
                'updated_at' => '2021-08-12 08:46:00',
            ),
        ));
        
        
    }
}