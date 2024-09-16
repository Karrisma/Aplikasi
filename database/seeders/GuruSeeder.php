<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('guru')->insert([
            'nama'=> 'Risma',
            'nomor_induk'=> '100',
            'alamat'=>'Bojonegoro',
            'created_at' =>date('Y-m-d H:i:s')
        ]);
        DB::table('guru')->insert([
            'nama'=> 'Sifyanu',
            'nomor_induk'=> '101',
            'alamat'=>'Tuban',
            'created_at' =>date('Y-m-d H:i:s')
        ]);
        DB::table('guru')->insert([
            'nama'=> 'Ahmad',
            'nomor_induk'=> '102',
            'alamat'=>'Blora',
            'created_at' =>date('Y-m-d H:i:s')
        ]);
    }
}
