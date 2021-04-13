<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class TeleponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker:: create('id_ID' );
        for($i = 1; $i <= 20; $i++){
        DB:: table('telepon' ) ->insert([
        'nomor_telepon' => $faker->phoneNumber,
        'pengguna_id' => $faker->numberBetween(1, 10),
        ]);
        }
}
}