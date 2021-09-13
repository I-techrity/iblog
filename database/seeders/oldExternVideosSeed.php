<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Seeder;

class oldExternVideosSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $videos = array(
            array('title' => 'في ميترو 2 : "Action"  بائع متجول لأكثر من 20 عاما','slug' => 'في-ميترو-2-action-بائع-متجول-لأكثر-من-20-عاما','clicks' => '4','user_id' => '31','youtube_link' => '','created_at' => '2020-09-27 08:43:02','updated_at' => '2020-10-07 09:09:49'),
            array('title' => 'احتجاجات باردو   26 جانفي 2021','slug' => 'احتجاجاتباردوتونس','clicks' => '3','user_id' => '15','youtube_link' => 'https://www.youtube.com/watch?v=AeeyA43B2QY&feature=youtu.be','created_at' => '2021-02-02 06:06:01','updated_at' => NULL)
        );

        $ids = array (
            7 => 30,
            8 => 31,
            9 => 32,
            10 => 33,
            11 => 34,
            13 => 35,
            15 => 36,
            16 => 37,
            17 => 38,
            18 => 39,
            19 => 40,
            20 => 41,
            21 => 42,
            22 => 43,
            23 => 44,
            24 => 45,
            25 => 46,
            26 => 47,
            27 => 48,
            28 => 49,
            29 => 50,
            31 => 51,
            35 => 52,
            36 => 53,
            46 => 54,
            49 => 55,
            50 => 56,
            51 => 57,
            52 => 58,
            54 => 59,
            60 => 60,
            64 => 61,
        );

        foreach ($videos as $key => $video) {
            Video::create([
                'title' => $video['title'],
                'slug' => $video['slug'],
                'clicks' => $video['clicks'],
                'user_id' => $ids[$video['user_id']],
                'created_at' => $video['created_at'],
                'updated_at' => $video['updated_at'],
                'youtube_link' => $video['youtube_link'],
            ]);
        }
    }
}
