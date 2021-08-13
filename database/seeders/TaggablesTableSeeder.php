<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaggablesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('taggables')->delete();
        
        \DB::table('taggables')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tag_id' => 2,
                'taggable_id' => 5,
                'taggable_type' => 'article',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'tag_id' => 4,
                'taggable_id' => 4,
                'taggable_type' => 'article',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}