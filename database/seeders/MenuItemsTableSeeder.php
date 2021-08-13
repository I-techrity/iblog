<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Dashboard',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2021-08-09 12:24:11',
                'updated_at' => '2021-08-09 13:19:08',
                'route' => 'voyager.dashboard',
                'parameters' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Media',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 9,
                'created_at' => '2021-08-09 12:24:11',
                'updated_at' => '2021-08-13 19:11:12',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Users',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2021-08-09 12:24:11',
                'updated_at' => '2021-08-13 19:11:12',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2021-08-09 12:24:11',
                'updated_at' => '2021-08-13 19:11:12',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 10,
                'created_at' => '2021-08-09 12:24:11',
                'updated_at' => '2021-08-13 19:11:12',
                'route' => NULL,
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 1,
                'created_at' => '2021-08-09 12:24:11',
                'updated_at' => '2021-08-09 13:18:22',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 2,
                'created_at' => '2021-08-09 12:24:11',
                'updated_at' => '2021-08-09 13:18:22',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 3,
                'created_at' => '2021-08-09 12:24:11',
                'updated_at' => '2021-08-09 13:18:22',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 4,
                'created_at' => '2021-08-09 12:24:11',
                'updated_at' => '2021-08-09 13:18:22',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Settings',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 8,
                'created_at' => '2021-08-09 12:24:11',
                'updated_at' => '2021-08-13 19:11:12',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'Hooks',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-hook',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 5,
                'created_at' => '2021-08-09 12:24:12',
                'updated_at' => '2021-08-09 13:18:22',
                'route' => 'voyager.hooks',
                'parameters' => NULL,
            ),
            11 => 
            array (
                'id' => 17,
                'menu_id' => 1,
                'title' => 'Categories',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-categories',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2021-08-12 09:34:22',
                'updated_at' => '2021-08-13 19:11:12',
                'route' => 'voyager.categories.index',
                'parameters' => NULL,
            ),
            12 => 
            array (
                'id' => 18,
                'menu_id' => 1,
                'title' => 'Tags',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tag',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2021-08-12 09:34:41',
                'updated_at' => '2021-08-13 19:11:12',
                'route' => 'voyager.tags.index',
                'parameters' => 'null',
            ),
            13 => 
            array (
                'id' => 19,
                'menu_id' => 1,
                'title' => 'Audio',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-sound',
                'color' => NULL,
                'parent_id' => 21,
                'order' => 2,
                'created_at' => '2021-08-12 10:13:20',
                'updated_at' => '2021-08-12 10:22:49',
                'route' => 'voyager.audio.index',
                'parameters' => NULL,
            ),
            14 => 
            array (
                'id' => 20,
                'menu_id' => 1,
                'title' => 'Videos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-video',
                'color' => NULL,
                'parent_id' => 21,
                'order' => 3,
                'created_at' => '2021-08-12 10:14:11',
                'updated_at' => '2021-08-12 10:22:49',
                'route' => 'voyager.videos.index',
                'parameters' => NULL,
            ),
            15 => 
            array (
                'id' => 21,
                'menu_id' => 1,
                'title' => 'Posts',
                'url' => '/posts',
                'target' => '_self',
                'icon_class' => 'voyager-pen',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2021-08-12 10:20:40',
                'updated_at' => '2021-08-12 10:20:49',
                'route' => NULL,
                'parameters' => '',
            ),
            16 => 
            array (
                'id' => 22,
                'menu_id' => 1,
                'title' => 'Articles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => '#000000',
                'parent_id' => 21,
                'order' => 1,
                'created_at' => '2021-08-12 10:22:37',
                'updated_at' => '2021-08-12 10:23:10',
                'route' => 'voyager.articles.index',
                'parameters' => 'null',
            ),
            17 => 
            array (
                'id' => 23,
                'menu_id' => 1,
                'title' => 'Comments',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bubble',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2021-08-13 18:41:11',
                'updated_at' => '2021-08-13 19:11:20',
                'route' => 'voyager.comments.index',
                'parameters' => 'null',
            ),
        ));
        
        
    }
}