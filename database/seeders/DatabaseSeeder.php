<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use Database\Factories\CustomerFactory;
use App\Models\Order;
use Database\Factories\OrderFactory;
use Faker\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $faker = Factory::create();

        $customers = Customer::factory(40)->create();
        for ($i = 0; $i < 30; $i++) {
            Order::factory()->create([
                'customer_id' => $customers[$faker->numberBetween(1, $customers->count())]
            ]);
        }
    }
}
