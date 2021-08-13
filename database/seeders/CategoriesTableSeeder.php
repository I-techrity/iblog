<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'cat 1',
                'desc' => 'cat 1',
                'created_at' => '2021-08-12 15:32:52',
                'updated_at' => '2021-08-12 15:32:52',
            ),
        ));
        
        
    }
}