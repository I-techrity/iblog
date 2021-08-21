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
                'created_at' => '2021-08-12 15:33:10',
                'updated_at' => '2021-08-12 15:33:10',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'vvvv',
                'created_at' => '2021-08-12 15:33:12',
                'updated_at' => '2021-08-12 15:33:12',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'eeeee',
                'created_at' => '2021-08-12 15:33:13',
                'updated_at' => '2021-08-12 15:33:13',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'zadfae',
                'created_at' => '2021-08-12 16:14:18',
                'updated_at' => '2021-08-12 16:14:18',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'zzdaefgvbfds',
                'created_at' => '2021-08-12 16:14:21',
                'updated_at' => '2021-08-12 16:14:21',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'azadzazfafe',
                'created_at' => '2021-08-12 16:14:23',
                'updated_at' => '2021-08-12 16:14:23',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'lara',
                'created_at' => '2021-08-20 11:26:36',
                'updated_at' => '2021-08-20 11:26:36',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'asasa',
                'created_at' => '2021-08-20 11:26:47',
                'updated_at' => '2021-08-20 11:26:47',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'asasasas',
                'created_at' => '2021-08-20 11:26:49',
                'updated_at' => '2021-08-20 11:26:49',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'aaaaaaaaa',
                'created_at' => '2021-08-20 11:26:51',
                'updated_at' => '2021-08-20 11:26:51',
            ),
        ));
        
        
    }
}