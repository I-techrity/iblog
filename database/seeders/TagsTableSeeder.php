<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'aaaa',
                'desc' => NULL,
                'created_at' => '2021-08-12 15:33:10',
                'updated_at' => '2021-08-12 15:33:10',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'vvvv',
                'desc' => NULL,
                'created_at' => '2021-08-12 15:33:12',
                'updated_at' => '2021-08-12 15:33:12',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'eeeee',
                'desc' => NULL,
                'created_at' => '2021-08-12 15:33:13',
                'updated_at' => '2021-08-12 15:33:13',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'zadfae',
                'desc' => NULL,
                'created_at' => '2021-08-12 16:14:18',
                'updated_at' => '2021-08-12 16:14:18',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'zzdaefgvbfds',
                'desc' => NULL,
                'created_at' => '2021-08-12 16:14:21',
                'updated_at' => '2021-08-12 16:14:21',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'azadzazfafe',
                'desc' => NULL,
                'created_at' => '2021-08-12 16:14:23',
                'updated_at' => '2021-08-12 16:14:23',
            ),
        ));
        
        
    }
}