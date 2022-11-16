<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MLMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create("id_ID");

        // for ($i=0; $i<10; $i++)
        // {
        //     DB::table('mlm')->insert([
        //         'id' => $faker->creditCardNumber,
        //         'name' => $faker->name,
        //         'address' => $faker->address,
        //         'phone' => $faker->phoneNumber,
        //         'upline' => $faker->name,
        //         'downline' => $faker->name,
        //         'referral' => 'ABC123',
        //     ]);
        // }

        $faker = Faker::create("id_ID");

        for ($i=0; $i<20; $i++)
        {
            DB::table('mlm')->insert([
                'id' => $faker->creditCardNumber,
                'name' => $faker->name,
                'address' => $faker->address,
                'phoneNumber' => $faker->phoneNumber,
                'downline_total' => 0
            ]);
        }
    }
}
