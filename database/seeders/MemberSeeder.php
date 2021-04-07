<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class MemberSeeder extends Seeder

{
 
 public function run()
 {
 $faker = Faker:: create('id_ID' );
 for($i = 1; $i <= 50; $i++){
 DB:: table('member' ) ->insert([
 'nama' => $faker->name,
 'pekerjaan' => $faker->jobTitle,
 'umur' => $faker->numberBetween(25, 40),
 'alamat' => $faker->address
 ]);
 }
 }
}
