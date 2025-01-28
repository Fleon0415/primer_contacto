<?php

namespace Database\Factories;

use App\Models\Transaction;
use App\Models\Property;
use App\Models\Client;
use App\Models\Agent;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    protected $model = Transaction::class;

    public function definition()
    {
        return [
            'property_id' => Property::factory(),
            'client_id' => Client::factory(),
            'agent_id' => Agent::factory(),
            'transaction_date' => $this->faker->date(),
            'type' => $this->faker->randomElement(['compra', 'alquiler']),
            'amount' => $this->faker->numberBetween(50000, 500000),
        ];
    }
}
