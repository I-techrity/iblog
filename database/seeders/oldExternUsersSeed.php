<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class oldExternUsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $data = [
        //     // ["name" => "iBlog"
        //     // ,"email" => "creaworldtn@gmail.com"],

        //     // ["name" => "test"
        //     // ,"email" => "hamamasoft@gmail.com"],

        //     // ["name" => "Iwatcher"
        //     // ,"email" => "safezarrouki@gmail.com"],

        //     [
        //         "name" => "Omar Hamama 1", "email" => "votittunisia@gmail.com"
        //     ],

        //     [
        //         "name" => "mariem ba", "email" => "mail.meriembenamor@gmail.com"
        //     ],

        //     [
        //         "name" => "Henda Fellah", "email" => "handouch2013@gmail.com"
        //     ],

        //     [
        //         "name" => "Nassreddine", "email" => "si.nacer.contact@gmail.com"
        //     ],

        //     [
        //         "name" => "Khouloud Kechiche", "email" => "khouloudkhf@gmail.com"
        //     ],

        //     [
        //         "name" => "Must Last", "email" => "mustlast95@gmail.com"
        //     ],

        //     [
        //         "name" => "Mohamed Amine Zantour", "email" => "aminezantour1@gmail.com"
        //     ],

        //     [
        //         "name" => "Amir Chaari", "email" => "chaari.1998@live.fr"
        //     ],

        //     [
        //         "name" => "Mahmoud Abdo", "email" => "Alsayad27@gmail.com"
        //     ],

        //     [
        //         "name" => "ahmeddkadri", "email" => "kadriahmed65@gmail.com"
        //     ],

        //     [
        //         "name" => "motazbellah", "email" => "motaz20102011@gmail.com"
        //     ],

        //     [
        //         "name" => "Basheer", "email" => "bash.journalist@gmail.com"
        //     ],

        //     [
        //         "name" => "Zainab_alokaidi", "email" => "zainabokaidi99@gmail.com"
        //     ],

        //     [
        //         "name" => "Olfa Mbarki", "email" => "olfambarki18@gmail.com"
        //     ],

        //     [
        //         "name" => "Islem", "email" => "islem6544@gmail.com"
        //     ],

        //     [
        //         "name" => "ahmed hwaihi", "email" => "hwaihiahmed1998@gmail.com"
        //     ],

        //     [
        //         "name" => "Sfaxi sofia", "email" => "soufia.sfaxi@gmail.com"
        //     ],

        //     [
        //         "name" => "sahar hafsa", "email" => "saharhafsa8@gmail.com"
        //     ],

        //     [
        //         "name" => "RAGHDA GUEGUI", "email" => "gueguiraghda@gmail.com"
        //     ],

        //     [
        //         "name" => "mejri ameny", "email" => "mejriameny@gmail.com"
        //     ],

        //     [
        //         "name" => "Seddik", "email" => "seddik.boubaker@yahoo.fr"
        //     ],

        //     [
        //         "name" => "Rania Rzig", "email" => "raniarzig17@gmail.com"
        //     ],

        //     [
        //         "name" => "maha ayadi", "email" => "ayedimaha23@gmail.com"
        //     ],

        //     [
        //         "name" => "Yousr Krid", "email" => "yousrkrid.yk@gmail.com"
        //     ],

        //     // ["name" => "Manel Ben Achour"
        //     // ,"email" => "manelbenachour@gmail.com"],

        //     // ["name" => "Souhaieb"
        //     // ,"email" => "souhaieb.ferchichii@gmail.com"],

        //     // ["name" => "tasnim"
        //     // ,"email" => "tesneemtayari@gmail.com"],

        //     [
        //         "name" => "Gada weslati", "email" => "gadaweslati11@gmail.com"
        //     ],

        //     // ["name" => "Ahmed Bedoui"
        //     // ,"email" => "ahmedbedoui0@gmail.com"],

        //     [
        //         "name" => "mariem z", "email" => "mariemzalfeni31@gmail.com"
        //     ],

        //     [
        //         "name" => "Khadija Soula", "email" => "soula12321@gmail.com"
        //     ],

        //     [
        //         "name" => "SeifAllah Ben Salem", "email" => "seifallahbs@futurevisions.tn"
        //     ],

        //     [
        //         "name" => "Wajdi jerjir", "email" => "wajdisdiri@gmail.com"
        //     ],

        //     // ["name" => "Adnen Farhani"
        //     // ,"email" => "adnenfarhani8@gmail.com"],

        //     [
        //         "name" => "Haythem MADDOURI", "email" => "haythem.madouri@gmail.com"
        //     ],

        //     // ["name" => "Adnen"
        //     // ,"email" => "farhani.dev@gmail.com"],

        //     // ["name" => "Mariem Ben Amor"
        //     // ,"email" => "meriem.ben.amor.96@gmail.com"],

        //     // ["name" => "adnenitechrity"
        //     // ,"email" => "farhani.dev9@gmail.com"],

        //     [
        //         "name" => "Achref Aouadi", "email" => "awadinho.10@hotmail.fr"
        //     ],

        //     // ["name" => "Safé Zarrouki"
        //     // ,"email" => "safezarrouki@live.fr"],

        //     // ["name" => "HijenHek"
        //     // ,"email" => "hijenhek@gmail.com"],

        //     // ["name" => "Oussama Ayari"
        //     // ,"email" => "ayari_oussama@netcourrier.com"],

        //     [
        //         "name" => "Maryem462", "email" => "maryem462@gmail.com"
        //     ],

        //     // ["name" => "Wassim Rekaya"
        //     // ,"email" => "w_rekaya@yahoo.fr"],

        //     // ["name" => "Yassin Chakroun"
        //     // ,"email" => "yassin.chakroune@yahoo.fr"],

        //     // ["name" => "Hatem Absi"
        //     // ,"email" => "hatem.absi1982@gmail.com"],

        //     // ["name" => "Sana Nahali"
        //     // ,"email" => "nahaliiisana@gmail.com"],

        //     // ["name" => "Tasnim Tayari"
        //     // ,"email" => "tasnimtayari@hotmail.fr"],
        // ];

        $data = [
            // [
            //     "id" => 1,
            //     "name" => "iBlog",
            //     "email" => "creaworldtn@gmail.com"
            // ],

            // [
            //     "id" => 2,
            //     "name" => "test",
            //     "email" => "hamamasoft@gmail.com"
            // ],

            // [
            //     "id" => 5,
            //     "name" => "Iwatcher",
            //     "email" => "safezarrouki@gmail.com"
            // ],

            [
                "id" => 7,
                "name" => "Omar Hamama 1",
                "email" => "votittunisia@gmail.com"
            ],

            [
                "id" => 8,
                "name" => "mariem ba",
                "email" => "mail.meriembenamor@gmail.com"
            ],

            [
                "id" => 9,
                "name" => "Henda Fellah",
                "email" => "handouch2013@gmail.com"
            ],

            [
                "id" => 10,
                "name" => "Nassreddine",
                "email" => "si.nacer.contact@gmail.com"
            ],

            [
                "id" => 11,
                "name" => "Khouloud Kechiche",
                "email" => "khouloudkhf@gmail.com"
            ],

            [
                "id" => 13,
                "name" => "Must Last",
                "email" => "mustlast95@gmail.com"
            ],

            [
                "id" => 15,
                "name" => "Mohamed Amine Zantour",
                "email" => "aminezantour1@gmail.com"
            ],

            [
                "id" => 16,
                "name" => "Amir Chaari",
                "email" => "chaari.1998@live.fr"
            ],

            [
                "id" => 17,
                "name" => "Mahmoud Abdo",
                "email" => "Alsayad27@gmail.com"
            ],

            [
                "id" => 18,
                "name" => "ahmeddkadri",
                "email" => "kadriahmed65@gmail.com"
            ],

            [
                "id" => 19,
                "name" => "motazbellah",
                "email" => "motaz20102011@gmail.com"
            ],

            [
                "id" => 20,
                "name" => "Basheer",
                "email" => "bash.journalist@gmail.com"
            ],

            [
                "id" => 21,
                "name" => "Zainab_alokaidi",
                "email" => "zainabokaidi99@gmail.com"
            ],

            [
                "id" => 22,
                "name" => "Olfa Mbarki",
                "email" => "olfambarki18@gmail.com"
            ],

            [
                "id" => 23,
                "name" => "Islem",
                "email" => "islem6544@gmail.com"
            ],

            [
                "id" => 24,
                "name" => "ahmed hwaihi",
                "email" => "hwaihiahmed1998@gmail.com"
            ],

            [
                "id" => 25,
                "name" => "Sfaxi sofia",
                "email" => "soufia.sfaxi@gmail.com"
            ],

            [
                "id" => 26,
                "name" => "sahar hafsa",
                "email" => "saharhafsa8@gmail.com"
            ],

            [
                "id" => 27,
                "name" => "RAGHDA GUEGUI",
                "email" => "gueguiraghda@gmail.com"
            ],

            [
                "id" => 28,
                "name" => "mejri ameny",
                "email" => "mejriameny@gmail.com"
            ],

            [
                "id" => 29,
                "name" => "Seddik",
                "email" => "seddik.boubaker@yahoo.fr"
            ],

            [
                "id" => 31,
                "name" => "Rania Rzig",
                "email" => "raniarzig17@gmail.com"
            ],

            [
                "id" => 35,
                "name" => "maha ayadi",
                "email" => "ayedimaha23@gmail.com"
            ],

            [
                "id" => 36,
                "name" => "Yousr Krid",
                "email" => "yousrkrid.yk@gmail.com"
            ],

            // [
            //     "id" => 37,
            //     "name" => "Manel Ben Achour",
            //     "email" => "manelbenachour@gmail.com"
            // ],

            // [
            //     "id" => 42,
            //     "name" => "Souhaieb",
            //     "email" => "souhaieb.ferchichii@gmail.com"
            // ],

            // [
            //     "id" => 43,
            //     "name" => "tasnim",
            //     "email" => "tesneemtayari@gmail.com"
            // ],

            [
                "id" => 46,
                "name" => "Gada weslati",
                "email" => "gadaweslati11@gmail.com"
            ],

            // [
            //     "id" => 47,
            //     "name" => "Ahmed Bedoui",
            //     "email" => "ahmedbedoui0@gmail.com"
            // ],

            [
                "id" => 49,
                "name" => "mariem z",
                "email" => "mariemzalfeni31@gmail.com"
            ],

            [
                "id" => 50,
                "name" => "Khadija Soula",
                "email" => "soula12321@gmail.com"
            ],

            [
                "id" => 51,
                "name" => "SeifAllah Ben Salem",
                "email" => "seifallahbs@futurevisions.tn"
            ],

            [
                "id" => 52,
                "name" => "Wajdi jerjir",
                "email" => "wajdisdiri@gmail.com"
            ],

            // [
            //     "id" => 53,
            //     "name" => "Adnen Farhani",
            //     "email" => "adnenfarhani8@gmail.com"
            // ],

            [
                "id" => 54,
                "name" => "Haythem MADDOURI",
                "email" => "haythem.madouri@gmail.com"
            ],

            // [
            //     "id" => 57,
            //     "name" => "Adnen",
            //     "email" => "farhani.dev@gmail.com"
            // ],

            // [
            //     "id" => 58,
            //     "name" => "Mariem Ben Amor",
            //     "email" => "meriem.ben.amor.96@gmail.com"
            // ],

            // [
            //     "id" => 59,
            //     "name" => "adnenitechrity",
            //     "email" => "farhani.dev9@gmail.com"
            // ],

            [
                "id" => 60,
                "name" => "Achref Aouadi",
                "email" => "awadinho.10@hotmail.fr"
            ],

            // [
            //     "id" => 61,
            //     "name" => "Safé Zarrouki",
            //     "email" => "safezarrouki@live.fr"
            // ],

            // [
            //     "id" => 62,
            //     "name" => "HijenHek",
            //     "email" => "hijenhek@gmail.com"
            // ],

            // [
            //     "id" => 63,
            //     "name" => "Oussama Ayari",
            //     "email" => "ayari_oussama@netcourrier.com"
            // ],

            [
                "id" => 64,
                "name" => "Maryem462",
                "email" => "maryem462@gmail.com"
            ],

            // [
            //     "id" => 65,
            //     "name" => "Wassim Rekaya",
            //     "email" => "w_rekaya@yahoo.fr"
            // ],

            // [
            //     "id" => 66,
            //     "name" => "Yassin Chakroun",
            //     "email" => "yassin.chakroune@yahoo.fr"
            // ],

            // [
            //     "id" => 68,
            //     "name" => "Hatem Absi",
            //     "email" => "hatem.absi1982@gmail.com"
            // ],

            // [
            //     "id" => 74,
            //     "name" => "Sana Nahali",
            //     "email" => "nahaliiisana@gmail.com"
            // ],

            // [
            //     "id" => 80,
            //     "name" => "Tasnim Tayari",
            //     "email" => "tasnimtayari@hotmail.fr"
            // ],
        ];

        $users = [];
        $ids = [];
        foreach ($data as $key => $item) {
            $password = substr($item['email'], 0,  strpos($item['email'], '@')) . rand(100, 999);
            $bcryptedPassword = Hash::make($password);

            $user = User::create([
                'id' => $key + 30 ,
                'name' => $item['name'],
                'email' => $item['email'],
                'password' => $bcryptedPassword,
                'role_id' => 2
            ]);
            $ids[$item['id']] = $user->id ;
            array_push($users, [
                "id" => $user->id,
                "name" => $user->name,
                "email" => $user->email,
                'bcryptedPassword' => $bcryptedPassword,
                'password' => $password
            ]);
        }



        Log::info($ids);
        Log::info($users);
        Storage::put('oldExternUsersData.json', json_encode($users));
        Storage::put('ids.json', json_encode($ids));
    }
}
