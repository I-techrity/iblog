<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comments')->delete();
        
        \DB::table('comments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'body' => 'hello',
                'commentable_id' => 2,
                'commentable_type' => 'article',
                'approved' => 0,
                'created_at' => '2021-08-13 18:42:13',
                'updated_at' => '2021-08-13 18:42:13',
            ),
        ));
        
        
    }
}