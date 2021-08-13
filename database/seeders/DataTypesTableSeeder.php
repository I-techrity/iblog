<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-08-09 12:24:11',
                'updated_at' => '2021-08-09 12:24:11',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-08-09 12:24:11',
                'updated_at' => '2021-08-09 12:24:11',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-08-09 12:24:11',
                'updated_at' => '2021-08-09 12:24:11',
            ),
            3 => 
            array (
                'id' => 9,
                'name' => 'articles',
                'slug' => 'articles',
                'display_name_singular' => 'Article',
                'display_name_plural' => 'Articles',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Article',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-08-09 13:31:24',
                'updated_at' => '2021-08-13 16:06:29',
            ),
            4 => 
            array (
                'id' => 10,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Category',
                'display_name_plural' => 'Categories',
                'icon' => 'voyager-categories',
                'model_name' => 'App\\Models\\Category',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2021-08-12 09:34:22',
                'updated_at' => '2021-08-12 09:34:22',
            ),
            5 => 
            array (
                'id' => 11,
                'name' => 'tags',
                'slug' => 'tags',
                'display_name_singular' => 'Tag',
                'display_name_plural' => 'Tags',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Tag',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2021-08-12 09:34:41',
                'updated_at' => '2021-08-12 09:34:41',
            ),
            6 => 
            array (
                'id' => 12,
                'name' => 'audio',
                'slug' => 'audio',
                'display_name_singular' => 'Audio',
                'display_name_plural' => 'Audio',
                'icon' => 'voyager-sound',
                'model_name' => 'App\\Models\\Audio',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-08-12 10:13:17',
                'updated_at' => '2021-08-12 15:35:11',
            ),
            7 => 
            array (
                'id' => 13,
                'name' => 'videos',
                'slug' => 'videos',
                'display_name_singular' => 'Video',
                'display_name_plural' => 'Videos',
                'icon' => 'voyager-video',
                'model_name' => 'App\\Models\\Video',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-08-12 10:14:11',
                'updated_at' => '2021-08-12 15:35:42',
            ),
            8 => 
            array (
                'id' => 15,
                'name' => 'comments',
                'slug' => 'comments',
                'display_name_singular' => 'Comment',
                'display_name_plural' => 'Comments',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Comment',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-08-13 18:41:10',
                'updated_at' => '2021-08-13 20:27:32',
            ),
        ));
        
        
    }
}