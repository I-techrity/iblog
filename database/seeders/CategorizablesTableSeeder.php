<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorizablesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categorizables')->delete();
        
        \DB::table('categorizables')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 1,
                'categorizable_id' => 5,
                'categorizable_type' => 'article',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => 1,
                'categorizable_id' => 4,
                'categorizable_type' => 'article',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}