<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2021-08-09 12:24:11',
                'updated_at' => '2021-08-09 12:24:11',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'member',
                'display_name' => 'Iblog Member',
                'created_at' => '2021-08-09 12:24:11',
                'updated_at' => '2021-08-12 15:37:48',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'super',
                'display_name' => 'Super Administrator',
                'created_at' => '2021-08-21 20:05:55',
                'updated_at' => '2021-08-21 20:05:55',
            ),
        ));
        
        
    }
}