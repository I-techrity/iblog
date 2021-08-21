<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permission_role')->delete();
        
        \DB::table('permission_role')->insert(array (
            0 => 
            array (
                'permission_id' => 1,
                'role_id' => 1,
            ),
            1 => 
            array (
                'permission_id' => 1,
                'role_id' => 2,
            ),
            2 => 
            array (
                'permission_id' => 1,
                'role_id' => 3,
            ),
            3 => 
            array (
                'permission_id' => 2,
                'role_id' => 3,
            ),
            4 => 
            array (
                'permission_id' => 3,
                'role_id' => 3,
            ),
            5 => 
            array (
                'permission_id' => 4,
                'role_id' => 3,
            ),
            6 => 
            array (
                'permission_id' => 5,
                'role_id' => 3,
            ),
            7 => 
            array (
                'permission_id' => 6,
                'role_id' => 3,
            ),
            8 => 
            array (
                'permission_id' => 7,
                'role_id' => 3,
            ),
            9 => 
            array (
                'permission_id' => 8,
                'role_id' => 3,
            ),
            10 => 
            array (
                'permission_id' => 9,
                'role_id' => 3,
            ),
            11 => 
            array (
                'permission_id' => 10,
                'role_id' => 3,
            ),
            12 => 
            array (
                'permission_id' => 11,
                'role_id' => 3,
            ),
            13 => 
            array (
                'permission_id' => 12,
                'role_id' => 3,
            ),
            14 => 
            array (
                'permission_id' => 13,
                'role_id' => 3,
            ),
            15 => 
            array (
                'permission_id' => 14,
                'role_id' => 3,
            ),
            16 => 
            array (
                'permission_id' => 15,
                'role_id' => 3,
            ),
            17 => 
            array (
                'permission_id' => 16,
                'role_id' => 1,
            ),
            18 => 
            array (
                'permission_id' => 16,
                'role_id' => 3,
            ),
            19 => 
            array (
                'permission_id' => 17,
                'role_id' => 1,
            ),
            20 => 
            array (
                'permission_id' => 17,
                'role_id' => 2,
            ),
            21 => 
            array (
                'permission_id' => 17,
                'role_id' => 3,
            ),
            22 => 
            array (
                'permission_id' => 18,
                'role_id' => 1,
            ),
            23 => 
            array (
                'permission_id' => 18,
                'role_id' => 3,
            ),
            24 => 
            array (
                'permission_id' => 19,
                'role_id' => 1,
            ),
            25 => 
            array (
                'permission_id' => 19,
                'role_id' => 3,
            ),
            26 => 
            array (
                'permission_id' => 20,
                'role_id' => 1,
            ),
            27 => 
            array (
                'permission_id' => 20,
                'role_id' => 3,
            ),
            28 => 
            array (
                'permission_id' => 21,
                'role_id' => 3,
            ),
            29 => 
            array (
                'permission_id' => 22,
                'role_id' => 3,
            ),
            30 => 
            array (
                'permission_id' => 23,
                'role_id' => 3,
            ),
            31 => 
            array (
                'permission_id' => 24,
                'role_id' => 3,
            ),
            32 => 
            array (
                'permission_id' => 25,
                'role_id' => 3,
            ),
            33 => 
            array (
                'permission_id' => 26,
                'role_id' => 3,
            ),
            34 => 
            array (
                'permission_id' => 47,
                'role_id' => 1,
            ),
            35 => 
            array (
                'permission_id' => 47,
                'role_id' => 2,
            ),
            36 => 
            array (
                'permission_id' => 47,
                'role_id' => 3,
            ),
            37 => 
            array (
                'permission_id' => 48,
                'role_id' => 1,
            ),
            38 => 
            array (
                'permission_id' => 48,
                'role_id' => 2,
            ),
            39 => 
            array (
                'permission_id' => 48,
                'role_id' => 3,
            ),
            40 => 
            array (
                'permission_id' => 49,
                'role_id' => 1,
            ),
            41 => 
            array (
                'permission_id' => 49,
                'role_id' => 2,
            ),
            42 => 
            array (
                'permission_id' => 49,
                'role_id' => 3,
            ),
            43 => 
            array (
                'permission_id' => 50,
                'role_id' => 1,
            ),
            44 => 
            array (
                'permission_id' => 50,
                'role_id' => 2,
            ),
            45 => 
            array (
                'permission_id' => 50,
                'role_id' => 3,
            ),
            46 => 
            array (
                'permission_id' => 51,
                'role_id' => 1,
            ),
            47 => 
            array (
                'permission_id' => 51,
                'role_id' => 2,
            ),
            48 => 
            array (
                'permission_id' => 51,
                'role_id' => 3,
            ),
            49 => 
            array (
                'permission_id' => 52,
                'role_id' => 1,
            ),
            50 => 
            array (
                'permission_id' => 52,
                'role_id' => 3,
            ),
            51 => 
            array (
                'permission_id' => 53,
                'role_id' => 1,
            ),
            52 => 
            array (
                'permission_id' => 53,
                'role_id' => 2,
            ),
            53 => 
            array (
                'permission_id' => 53,
                'role_id' => 3,
            ),
            54 => 
            array (
                'permission_id' => 54,
                'role_id' => 1,
            ),
            55 => 
            array (
                'permission_id' => 54,
                'role_id' => 3,
            ),
            56 => 
            array (
                'permission_id' => 55,
                'role_id' => 1,
            ),
            57 => 
            array (
                'permission_id' => 55,
                'role_id' => 3,
            ),
            58 => 
            array (
                'permission_id' => 56,
                'role_id' => 1,
            ),
            59 => 
            array (
                'permission_id' => 56,
                'role_id' => 3,
            ),
            60 => 
            array (
                'permission_id' => 57,
                'role_id' => 1,
            ),
            61 => 
            array (
                'permission_id' => 57,
                'role_id' => 3,
            ),
            62 => 
            array (
                'permission_id' => 58,
                'role_id' => 1,
            ),
            63 => 
            array (
                'permission_id' => 58,
                'role_id' => 2,
            ),
            64 => 
            array (
                'permission_id' => 58,
                'role_id' => 3,
            ),
            65 => 
            array (
                'permission_id' => 59,
                'role_id' => 1,
            ),
            66 => 
            array (
                'permission_id' => 59,
                'role_id' => 3,
            ),
            67 => 
            array (
                'permission_id' => 60,
                'role_id' => 1,
            ),
            68 => 
            array (
                'permission_id' => 60,
                'role_id' => 2,
            ),
            69 => 
            array (
                'permission_id' => 60,
                'role_id' => 3,
            ),
            70 => 
            array (
                'permission_id' => 61,
                'role_id' => 1,
            ),
            71 => 
            array (
                'permission_id' => 61,
                'role_id' => 3,
            ),
            72 => 
            array (
                'permission_id' => 62,
                'role_id' => 1,
            ),
            73 => 
            array (
                'permission_id' => 62,
                'role_id' => 2,
            ),
            74 => 
            array (
                'permission_id' => 62,
                'role_id' => 3,
            ),
            75 => 
            array (
                'permission_id' => 63,
                'role_id' => 1,
            ),
            76 => 
            array (
                'permission_id' => 63,
                'role_id' => 2,
            ),
            77 => 
            array (
                'permission_id' => 63,
                'role_id' => 3,
            ),
            78 => 
            array (
                'permission_id' => 64,
                'role_id' => 1,
            ),
            79 => 
            array (
                'permission_id' => 64,
                'role_id' => 2,
            ),
            80 => 
            array (
                'permission_id' => 64,
                'role_id' => 3,
            ),
            81 => 
            array (
                'permission_id' => 65,
                'role_id' => 1,
            ),
            82 => 
            array (
                'permission_id' => 65,
                'role_id' => 2,
            ),
            83 => 
            array (
                'permission_id' => 65,
                'role_id' => 3,
            ),
            84 => 
            array (
                'permission_id' => 66,
                'role_id' => 1,
            ),
            85 => 
            array (
                'permission_id' => 66,
                'role_id' => 2,
            ),
            86 => 
            array (
                'permission_id' => 66,
                'role_id' => 3,
            ),
            87 => 
            array (
                'permission_id' => 67,
                'role_id' => 1,
            ),
            88 => 
            array (
                'permission_id' => 67,
                'role_id' => 2,
            ),
            89 => 
            array (
                'permission_id' => 67,
                'role_id' => 3,
            ),
            90 => 
            array (
                'permission_id' => 68,
                'role_id' => 1,
            ),
            91 => 
            array (
                'permission_id' => 68,
                'role_id' => 2,
            ),
            92 => 
            array (
                'permission_id' => 68,
                'role_id' => 3,
            ),
            93 => 
            array (
                'permission_id' => 69,
                'role_id' => 1,
            ),
            94 => 
            array (
                'permission_id' => 69,
                'role_id' => 2,
            ),
            95 => 
            array (
                'permission_id' => 69,
                'role_id' => 3,
            ),
            96 => 
            array (
                'permission_id' => 70,
                'role_id' => 1,
            ),
            97 => 
            array (
                'permission_id' => 70,
                'role_id' => 2,
            ),
            98 => 
            array (
                'permission_id' => 70,
                'role_id' => 3,
            ),
            99 => 
            array (
                'permission_id' => 71,
                'role_id' => 1,
            ),
            100 => 
            array (
                'permission_id' => 71,
                'role_id' => 2,
            ),
            101 => 
            array (
                'permission_id' => 71,
                'role_id' => 3,
            ),
            102 => 
            array (
                'permission_id' => 72,
                'role_id' => 1,
            ),
            103 => 
            array (
                'permission_id' => 72,
                'role_id' => 3,
            ),
            104 => 
            array (
                'permission_id' => 73,
                'role_id' => 1,
            ),
            105 => 
            array (
                'permission_id' => 73,
                'role_id' => 3,
            ),
            106 => 
            array (
                'permission_id' => 74,
                'role_id' => 1,
            ),
            107 => 
            array (
                'permission_id' => 74,
                'role_id' => 3,
            ),
            108 => 
            array (
                'permission_id' => 75,
                'role_id' => 3,
            ),
            109 => 
            array (
                'permission_id' => 76,
                'role_id' => 1,
            ),
            110 => 
            array (
                'permission_id' => 76,
                'role_id' => 3,
            ),
        ));
        
        
    }
}