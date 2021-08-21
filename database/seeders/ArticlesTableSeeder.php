<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('articles')->delete();
        
        \DB::table('articles')->insert(array (
            0 => 
            array (
                'id' => 2,
                'title' => 'Enim ut est esse c',
                'slug' => 'enim-ut-est-esse-c',
                'cover' => 'articles\\August2021\\EtD0jDhSBXUUFvmXSU6q.jpg',
                'image' => 'articles\\August2021\\LS8a9d4EouXRqVqrdv1l.jpg',
                'approved' => 0,
                'clicks' => 0,
                'user_id' => 2,
                'body' => '<p>Enim ut est esse c <em><strong>Enim ut est esse c</strong></em></p>',
                'excerpt' => 'Enim ut est esse c Enim ut est esse c',
                'created_at' => '2021-08-12 10:37:50',
                'updated_at' => '2021-08-13 15:59:54',
            ),
            1 => 
            array (
                'id' => 3,
                'title' => 'Enim ut est esse c',
                'slug' => 'enim-ut-est-esse-c-1',
                'cover' => 'articles\\August2021\\QRe9iB38JlNzZtGcXErm.jpg',
                'image' => 'articles\\August2021\\bzXr8vjhZWp6xRcnupCU.jpg',
                'approved' => 0,
                'clicks' => 0,
                'user_id' => 2,
                'body' => '<h3><span style="color: #76838f; font-family: \'Open Sans\', sans-serif; background-color: #f5f5f5;">Enim ut est esse c</span></h3>
<p><span style="background-color: #f5f5f5; color: #76838f; font-family: \'Open Sans\', sans-serif;">Enim ut est esse c</span></p>',
                'excerpt' => 'Enim ut est esse c
Enim ut est esse c',
                'created_at' => '2021-08-12 10:38:43',
                'updated_at' => '2021-08-12 10:39:53',
            ),
            2 => 
            array (
                'id' => 4,
                'title' => 'dafedafa e aea a ea',
                'slug' => 'dafedafa-e-aea-a-ea',
                'cover' => 'articles\\August2021\\yvvCu421SZAeOzrhh6gR.jpg',
                'image' => 'articles\\August2021\\1jDffQfyUyswcDr9ARSF.jpg',
                'approved' => 0,
                'clicks' => 0,
                'user_id' => 2,
                'body' => '<p>dea eaf ea fea fea fe</p>',
                'excerpt' => 'dea eaf ea fea fea fe',
                'created_at' => '2021-08-12 16:13:19',
                'updated_at' => '2021-08-13 15:38:53',
            ),
            3 => 
            array (
                'id' => 5,
                'title' => 'member article',
                'slug' => 'member-article',
                'cover' => 'articles\\August2021\\ahKSdFC97ca9offWZ5tx.png',
                'image' => 'articles\\August2021\\b0sXjRWUs3Io1Kf7RuWC.jpg',
                'approved' => 1,
                'clicks' => 1,
                'user_id' => 1,
                'body' => '<p>member <strong>articles none</strong></p>',
                'excerpt' => 'member articles none',
                'created_at' => '2021-08-13 16:04:58',
                'updated_at' => '2021-08-21 20:10:21',
            ),
        ));
        
        
    }
}