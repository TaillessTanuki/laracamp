<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @ return void
     */
    public function run()
    {
        //
        $camps = [
            [
                'title'=> 'Gila Belajar',
                'slug' => 'gila-belajar',
                'price'=> '280',

                'created_at'=>date('Y-m-d H:i:s', time()), //timestamps, dibutuhkan untuk cara 2
                'updated_at'=>date('Y-m-d H:i:s', time()), //timestamps, dibutuhkan untuk cara 2

            ],

            [
                'title'=> 'Baru Mulai',
                'slug' => 'baru-mulai',
                'price'=> '140',
                'created_at'=>date('Y-m-d H:i:s', time()), //timestamps, dibutuhkan untuk cara 2
                'updated_at'=>date('Y-m-d H:i:s', time()), //timestamps, dibutuhkan untuk cara 2

            ]
        ];


        //cara 1 untuk menampilkan nilai seeder
        /**foreach ($camps as $key => $camp) {
            Camp::create($camp);
        }
        */

        //cara 2 untuk menampilkan nilai seeder
        Camp::insert($camps);
    }
}
