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
                'role_id' => 2,
                'name' => 'member',
                'fb_token' => NULL,
                'email' => 'member@iblog.test',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GGJsZjvMFOYdyx1P8H99m.7cZAgOE7Zkksk3QuHih5RAIQDpzyhdG',
                'remember_token' => 'LAnogviCbI3hksaoRWAWD2NPlExd6qY8y50KBAGrsB8CPtP0jeLn5VIAfAiT',
                'settings' => '{"locale":"en"}',
                'created_at' => '2021-08-09 12:39:49',
                'updated_at' => '2021-08-12 15:37:39',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 1,
                'name' => 'super',
                'fb_token' => NULL,
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