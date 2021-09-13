<?php

namespace Database\Seeders;

use App\Models\Audio;
use Illuminate\Database\Seeder;

class oldExternAudioSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $audios = array(
            array('title' => 'تونسي وعليه الكلام','slug' => 'social','user_id' => '15','clicks' => '413','created_at' => '2020-09-22 19:56:49','updated_at' => '2020-10-07 08:27:56','cover' => 'storage/images/2020/09/image_750x500_5f7117ced8656.jpg'),
            array('title' => 'احتجاجات باردو بتاريخ 26 جانفي 2021','slug' => 'باردو','user_id' => '15','clicks' => '3','created_at' => '2021-02-01 18:08:18','updated_at' => NULL,'cover' => 'storage/images/2021/02/image_750x500_60187a0c8ee5b.jpg'),
            array('title' => 'العنف في تونس','slug' => 'عنف--مجتمع-تونس','user_id' => '15','clicks' => '1','created_at' => '2021-02-01 19:56:06','updated_at' => NULL,'cover' => 'storage/images/2021/02/image_750x500_601893e8cff5d.jpg'),
            array('title' => 'كيف تعاملت وسائل الإعلام التونسية مع جائحة كورونا','slug' => 'تقريرإعلامكورونا','user_id' => '15','clicks' => '2','created_at' => '2021-02-02 10:40:50','updated_at' => NULL,'cover' => 'storage/images/2021/02/image_750x500_601962d1e513e.jpg'),
            array('title' => 'كيف يفسر المواطنون مشاهد العنف في البرلمان التونسي؟','slug' => 'استجواب-خاطف-برلمانتونس','user_id' => '15','clicks' => '1','created_at' => '2021-02-04 12:12:45','updated_at' => NULL,'cover' => 'storage/images/2021/02/image_750x500_601c1cd3174c2.jpg')
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

        foreach ($audios as $key => $audio) {
            Audio::create([
                'title' => $audio['title'],
                'slug' => $audio['slug'],
                'clicks' => $audio['clicks'],
                'user_id' => $ids[$audio['user_id']],
                'created_at' => $audio['created_at'],
                'updated_at' => $audio['updated_at'],
                'cover' => $audio['cover'],
                'file' => ''
            ]);
        }
    }
}
