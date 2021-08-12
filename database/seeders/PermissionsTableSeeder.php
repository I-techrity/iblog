<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2021-08-09 12:24:11',
                'updated_at' => '2021-08-09 12:24:11',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2021-08-09 12:24:11',
                'updated_at' => '2021-08-09 12:24:11',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2021-08-09 12:24:11',
                'updated_at' => '2021-08-09 12:24:11',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2021-08-09 12:24:11',
                'updated_at' => '2021-08-09 12:24:11',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2021-08-09 12:24:11',
                'updated_at' => '2021-08-09 12:24:11',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2021-08-09 12:24:11',
                'updated_at' => '2021-08-09 12:24:11',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2021-08-09 12:24:11',
                'updated_at' => '2021-08-09 12:24:11',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2021-08-09 12:24:11',
                'updated_at' => '2021-08-09 12:24:11',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2021-08-09 12:24:11',
                'updated_at' => '2021-08-09 12:24:11',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2021-08-09 12:24:11',
                'updated_at' => '2021-08-09 12:24:11',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2021-08-09 12:24:11',
                'updated_at' => '2021-08-09 12:24:11',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2021-08-09 12:24:11',
                'updated_at' => '2021-08-09 12:24:11',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2021-08-09 12:24:11',
                'updated_at' => '2021-08-09 12:24:11',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2021-08-09 12:24:11',
                'updated_at' => '2021-08-09 12:24:11',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2021-08-09 12:24:11',
                'updated_at' => '2021-08-09 12:24:11',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2021-08-09 12:24:12',
                'updated_at' => '2021-08-09 12:24:12',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2021-08-09 12:24:12',
                'updated_at' => '2021-08-09 12:24:12',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2021-08-09 12:24:12',
                'updated_at' => '2021-08-09 12:24:12',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2021-08-09 12:24:12',
                'updated_at' => '2021-08-09 12:24:12',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2021-08-09 12:24:12',
                'updated_at' => '2021-08-09 12:24:12',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2021-08-09 12:24:12',
                'updated_at' => '2021-08-09 12:24:12',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2021-08-09 12:24:12',
                'updated_at' => '2021-08-09 12:24:12',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2021-08-09 12:24:12',
                'updated_at' => '2021-08-09 12:24:12',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2021-08-09 12:24:12',
                'updated_at' => '2021-08-09 12:24:12',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2021-08-09 12:24:12',
                'updated_at' => '2021-08-09 12:24:12',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2021-08-09 12:24:12',
                'updated_at' => '2021-08-09 12:24:12',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'browse_teams',
                'table_name' => 'teams',
                'created_at' => '2021-08-09 12:51:05',
                'updated_at' => '2021-08-09 12:51:05',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'read_teams',
                'table_name' => 'teams',
                'created_at' => '2021-08-09 12:51:05',
                'updated_at' => '2021-08-09 12:51:05',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'edit_teams',
                'table_name' => 'teams',
                'created_at' => '2021-08-09 12:51:05',
                'updated_at' => '2021-08-09 12:51:05',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'add_teams',
                'table_name' => 'teams',
                'created_at' => '2021-08-09 12:51:05',
                'updated_at' => '2021-08-09 12:51:05',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'delete_teams',
                'table_name' => 'teams',
                'created_at' => '2021-08-09 12:51:05',
                'updated_at' => '2021-08-09 12:51:05',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2021-08-09 13:10:06',
                'updated_at' => '2021-08-09 13:10:06',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2021-08-09 13:10:06',
                'updated_at' => '2021-08-09 13:10:06',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2021-08-09 13:10:06',
                'updated_at' => '2021-08-09 13:10:06',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2021-08-09 13:10:06',
                'updated_at' => '2021-08-09 13:10:06',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2021-08-09 13:10:06',
                'updated_at' => '2021-08-09 13:10:06',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'browse_clients',
                'table_name' => 'clients',
                'created_at' => '2021-08-09 13:11:08',
                'updated_at' => '2021-08-09 13:11:08',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'read_clients',
                'table_name' => 'clients',
                'created_at' => '2021-08-09 13:11:08',
                'updated_at' => '2021-08-09 13:11:08',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'edit_clients',
                'table_name' => 'clients',
                'created_at' => '2021-08-09 13:11:08',
                'updated_at' => '2021-08-09 13:11:08',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'add_clients',
                'table_name' => 'clients',
                'created_at' => '2021-08-09 13:11:08',
                'updated_at' => '2021-08-09 13:11:08',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'delete_clients',
                'table_name' => 'clients',
                'created_at' => '2021-08-09 13:11:08',
                'updated_at' => '2021-08-09 13:11:08',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_projects',
                'table_name' => 'projects',
                'created_at' => '2021-08-09 13:12:47',
                'updated_at' => '2021-08-09 13:12:47',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_projects',
                'table_name' => 'projects',
                'created_at' => '2021-08-09 13:12:47',
                'updated_at' => '2021-08-09 13:12:47',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_projects',
                'table_name' => 'projects',
                'created_at' => '2021-08-09 13:12:47',
                'updated_at' => '2021-08-09 13:12:47',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_projects',
                'table_name' => 'projects',
                'created_at' => '2021-08-09 13:12:47',
                'updated_at' => '2021-08-09 13:12:47',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_projects',
                'table_name' => 'projects',
                'created_at' => '2021-08-09 13:12:47',
                'updated_at' => '2021-08-09 13:12:47',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'browse_articles',
                'table_name' => 'articles',
                'created_at' => '2021-08-09 13:31:24',
                'updated_at' => '2021-08-09 13:31:24',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'read_articles',
                'table_name' => 'articles',
                'created_at' => '2021-08-09 13:31:24',
                'updated_at' => '2021-08-09 13:31:24',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'edit_articles',
                'table_name' => 'articles',
                'created_at' => '2021-08-09 13:31:24',
                'updated_at' => '2021-08-09 13:31:24',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'add_articles',
                'table_name' => 'articles',
                'created_at' => '2021-08-09 13:31:24',
                'updated_at' => '2021-08-09 13:31:24',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'delete_articles',
                'table_name' => 'articles',
                'created_at' => '2021-08-09 13:31:24',
                'updated_at' => '2021-08-09 13:31:24',
            ),
        ));
        
        
    }
}