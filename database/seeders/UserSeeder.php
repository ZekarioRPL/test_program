<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        # init faker
        $faker = Faker::create('id_ID');

        $user = User::create([
            "username" => "admin",
            "password" => 'password',
            "type" => 'Admin'
        ]);

        for($i = 1; $i <= 10; $i++) {
            $user = User::create([
                "username" => "customer_$i",
                "password" => 'password',
                "type" => 'Customer'
            ]);

            $customer = Customer::create([
                'user_id' => $user->id,
                'name' => $faker->name(),
                'telephone' => $faker->phoneNumber(),
                'email' => $faker->email(),
                'address' => $faker->address(),
                'city' => $faker->city(),
                'province' => $faker->citySuffix(),
                'pos_code' => "0010$i",
            ]);
        }
    }
}
