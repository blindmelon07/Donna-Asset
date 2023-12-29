<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Employee;
use App\Models\Equipment;

class EquipmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Equipment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'serial_number' => $this->faker->word(),
            'description' => $this->faker->text(),
            'quantity' => $this->faker->word(),
            'status' => $this->faker->word(),
            'purchase_date' => $this->faker->dateTime(),
            'date_acquire' => $this->faker->dateTime(),
            'date_encoded' => $this->faker->dateTime(),
            'employee_id' => Employee::factory(),
        ];
    }
}
