<?php

namespace Database\Factories;

use App\Models\device;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = device::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand' => Str::random(3),
            'name' => Str::random(5),
            'appearance' => Str::random(10),
            'functionality' => Str::random(10),
            'color' => Str::random(10),
            'boxed' => Str::random(10),
            'additionalInfo' => Str::random(10),
            'qty' => Str::random(10),
            'price' => Str::random(10),
        ];
    }
}
