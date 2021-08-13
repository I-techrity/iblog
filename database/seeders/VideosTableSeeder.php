<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('videos')->delete();
        
        \DB::table('videos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'coolio',
                'slug' => 'coolio',
                'cover' => 'videos\\August2021\\B6at8AL9bnYpWjYnh7ps.jpg',
                'user_id' => 2,
                'file' => '[{"download_link":"videos\\\\August2021\\\\f6zUn3z9KbfWWAXsvVEF.mp4","original_name":"y2mate.com - Coolio ft LV Gangstas Paradise on the Howard Stern Show 1995_v720P.mp4"}]',
                'desc' => 'gangster paradise',
                'clicks' => 0,
                'created_at' => '2021-08-12 10:53:59',
                'updated_at' => '2021-08-12 10:53:59',
            ),
        ));
        
        
    }
}