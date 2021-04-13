<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker:: create('id_ID' );
        for($i = 1; $i <= 10; $i++){
        DB:: table('pengguna' ) ->insert([
        'nama' => $faker->name,
        'created_at' => $faker->date("Y-m-d H:i:s") 
        ]);
        }   //
    }
}
