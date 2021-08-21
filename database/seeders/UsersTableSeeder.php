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
                'email' => 'member@iblog.tn',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GGJsZjvMFOYdyx1P8H99m.7cZAgOE7Zkksk3QuHih5RAIQDpzyhdG',
                'remember_token' => '9vi7AKQ7j7x6dngPpV915HEk7Z6z65o1psSvNcz2poJwcKqUAxPwzZ0K5Gm3',
                'settings' => '{"locale":"en"}',
                'created_at' => '2021-08-09 12:39:49',
                'updated_at' => '2021-08-21 20:12:34',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 3,
                'name' => 'super',
                'fb_token' => NULL,
                'email' => 'super@iblog.tn',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$PFERMKS6KIKsR.Ln7LCvP.cSDK2q/AE1723ijdxtzyTR23roLd.Wm',
                'remember_token' => 'WH2DgiqBmuy1aJH6yiwzBGXwgN8ktXr5HmWH4VwQQ9rJH8bwXEJsUM4nVS2M',
                'settings' => '{"locale":"en"}',
                'created_at' => '2021-08-12 08:46:00',
                'updated_at' => '2021-08-21 20:13:15',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 1,
                'name' => 'admin',
                'fb_token' => NULL,
                'email' => 'admin@iblog.tn',
                'avatar' => 'users/default.jpg',
                'email_verified_at' => NULL,
                'password' => '$2y$10$tyncJrgekorYxjak8jyrNOGqOZ3.j9SKEzV4QaICUjuJ45IT3QPNe',
                'remember_token' => '4OpSrdeSHOMJEnyVPlBks5hb6xd8VfyzhCqpiCLtuRAhmN13cIY1p3tISu93',
                'settings' => '{"locale":"en"}',
                'created_at' => '2021-08-21 20:11:23',
                'updated_at' => '2021-08-21 20:11:23',
            ),
        ));
        
        
    }
}