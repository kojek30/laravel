<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder

{
 
 public function run()
 {
 $faker = Faker:: create('id_ID' );
 for($i = 1; $i <= 50; $i++){
 DB:: table('pegawai' ) ->insert([
 'nama' => $faker->name,
 'alamat' => $faker->address,
 'created_at' => $faker->date("Y-m-d H:i:s") 
 ]);
 }
 }
}
