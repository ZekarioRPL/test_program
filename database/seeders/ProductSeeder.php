<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        # init faker
        $faker = Faker::create('id_ID');

        # setup
        $categorys = ['khusus', 'belanjaan', 'perabotan'];

        $customers = Customer::all();
        foreach ($customers as $customer) {

            for ($i = 1; $i <= 5; $i++)
                $product = Product::create([
                    'user_id' => $customer->user_id,
                    'name' => $faker->name(),
                    'code' => "A02$i",
                    'category' => $categorys[($i % count($categorys))],
                    'price' => $faker->randomNumber(4),
                    'stock' => $faker->randomNumber(2),
                    'capacity' => $faker->randomNumber(1),
                    'height' => $faker->randomNumber(2),
                    'width' => $faker->randomNumber(2),
                    'tube_diameter' => $faker->randomNumber(3),
                    'weight' => $faker->randomNumber(2),
                ]);
        }
    }
}
