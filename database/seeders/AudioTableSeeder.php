<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AudioTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('audio')->delete();
        
        \DB::table('audio')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'jordan 1\'s',
                'slug' => 'jordan-1s',
                'cover' => 'audio\\August2021\\hRtNg7v9pmlTdiu0lkdY.jpg',
                'user_id' => 2,
                'file' => '[{"download_link":"audio\\\\August2021\\\\PL6tvCwASe6Gjr3ykqtO.mp3","original_name":"y2mate.com - Dave  Clash ft Stormzy.mp3"}]',
                'desc' => 'stromzy jordan 4\'s',
                'created_at' => '2021-08-12 10:52:43',
                'updated_at' => '2021-08-12 10:52:43',
            ),
        ));
        
        
    }
}