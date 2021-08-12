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
                'user_id' => 2,
                'body' => '<p>Enim ut est esse c <em><strong>Enim ut est esse c</strong></em></p>',
                'excerpt' => 'Enim ut est esse c Enim ut est esse c',
                'created_at' => '2021-08-12 10:37:50',
                'updated_at' => '2021-08-12 10:37:50',
            ),
            1 => 
            array (
                'id' => 3,
                'title' => 'Enim ut est esse c',
                'slug' => 'enim-ut-est-esse-c-1',
                'cover' => 'articles\\August2021\\QRe9iB38JlNzZtGcXErm.jpg',
                'image' => 'articles\\August2021\\bzXr8vjhZWp6xRcnupCU.jpg',
                'user_id' => 2,
                'body' => '<h3><span style="color: #76838f; font-family: \'Open Sans\', sans-serif; background-color: #f5f5f5;">Enim ut est esse c</span></h3>
<p><span style="background-color: #f5f5f5; color: #76838f; font-family: \'Open Sans\', sans-serif;">Enim ut est esse c</span></p>',
                'excerpt' => 'Enim ut est esse c
Enim ut est esse c',
                'created_at' => '2021-08-12 10:38:43',
                'updated_at' => '2021-08-12 10:39:53',
            ),
        ));
        
        
    }
}