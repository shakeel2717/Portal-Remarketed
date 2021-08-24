<?php

namespace Database\Factories;

use App\Models\device;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
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
            'brand' => Arr::random(["Apple", "Acer", "Dell", "Samsung", "Lenovo"]),
            'name' => Arr::random(["IPod", "Laptop", "Mobile", "LCD", "Watch"]),
            'appearance' => Arr::random(["Grade A", "Grade B", "Grade C"]),
            'functionality' => Arr::random(["Working", "Not Working", "Damaged"]),
            'color' => Arr::random(["Red", "White", "Blue"]),
            'boxed' => Arr::random(["Original Box", "Unboxed", "UK Boxed"]),
            'additionalInfo' => Str::random(45),
            'qty' => Arr::random([1, 2, 3, 4, 5]),
            'price' => Arr::random([10, 200, 300, 400, 500]),
        ];
    }
}
