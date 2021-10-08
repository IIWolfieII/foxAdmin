<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\CustomerFactory;
use App\Models\Customer;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    private $payments = ['Paid', 'Due'];
    private $statuses = ['Pending', 'In Progress', 'Delivered'];

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word . ' ' . $this->faker->word,
            'description' => $this->faker->sentence(15),
            'price' => $this->faker->numberBetween(300, 1200),
            'payment' => $this->payments[$this->faker->numberBetween(0, 1)],
            'customer_id' => Customer::factory(),
            'status' => $this->statuses[$this->faker->numberBetween(0, 2)]
        ];
    }
}
