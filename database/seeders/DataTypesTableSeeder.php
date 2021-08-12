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
                'id' => 4,
                'name' => 'teams',
                'slug' => 'team',
                'display_name_singular' => 'Team',
                'display_name_plural' => 'Team',
                'icon' => 'voyager-group',
                'model_name' => 'App\\Models\\Team',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-08-09 12:51:05',
                'updated_at' => '2021-08-09 12:51:50',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'clients',
                'slug' => 'clients',
                'display_name_singular' => 'Client',
                'display_name_plural' => 'Clients',
                'icon' => 'voyager-user',
                'model_name' => 'App\\Models\\Client',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-08-09 13:11:08',
                'updated_at' => '2021-08-09 13:11:25',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'projects',
                'slug' => 'projects',
                'display_name_singular' => 'Project',
                'display_name_plural' => 'Projects',
                'icon' => 'voyager-company',
                'model_name' => 'App\\Models\\Project',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-08-09 13:12:47',
                'updated_at' => '2021-08-09 13:16:12',
            ),
            6 => 
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
                'updated_at' => '2021-08-09 13:43:20',
            ),
            7 => 
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
            8 => 
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
        ));
        
        
    }
}