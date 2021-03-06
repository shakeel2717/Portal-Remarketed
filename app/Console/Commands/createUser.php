<?php

namespace App\Console\Commands;

use App\Models\admin;
use App\Models\device;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\Models\users;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class createUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Default user for Testing Product and clean everything';


    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        users::create([
            'fname' => 'Shakeel',
            'lname' => 'Ahmad',
            'username' => 'shakeel2717',
            'email' => 'shakeel2717@gmail.com',
            'password' => 'asdfasdf',
            'status' => 'Active',
        ]);

        users::create([
            'fname' => 'Basharat',
            'lname' => 'Ali',
            'username' => 'basharat',
            'email' => 'basharat604@gmail.com',
            'password' => 'asdfasdf',
            'status' => 'Active',
        ]);


        admin::create([
            'username' => 'test',
            'password' => 'test',
        ]);



        device::create([
            'brand' => Arr::random(["Apple", "Acer", "Dell", "Samsung", "Lenovo"]),
            'name' => Arr::random(["IPod", "Laptop", "Mobile", "LCD", "Watch"]),
            'appearance' => Arr::random(["Grade A", "Grade B", "Grade C", "Motherboard"]),
            'functionality' => Arr::random(["Working", "Minor Fault"]),
            'color' => Arr::random(["Red", "White", "Blue"]),
            'boxed' => Arr::random(["Original Box", "Unboxed", "UK Boxed"]),
            'additionalInfo' => Str::random(45),
            'qty' => Arr::random([1, 2, 3, 4, 5]),
            'price' => Arr::random([10, 200, 300, 400, 500]),
        ]);
        device::create([
            'brand' => Arr::random(["Apple", "Acer", "Dell", "Samsung", "Lenovo"]),
            'name' => Arr::random(["IPod", "Laptop", "Mobile", "LCD", "Watch"]),
            'appearance' => Arr::random(["Grade A", "Grade B", "Grade C", "Motherboard"]),
            'functionality' => Arr::random(["Working", "Minor Fault"]),
            'color' => Arr::random(["Red", "White", "Blue"]),
            'boxed' => Arr::random(["Original Box", "Unboxed", "UK Boxed"]),
            'additionalInfo' => Str::random(45),
            'qty' => Arr::random([1, 2, 3, 4, 5]),
            'price' => Arr::random([10, 200, 300, 400, 500]),
        ]);
        device::create([
            'brand' => Arr::random(["Apple", "Acer", "Dell", "Samsung", "Lenovo"]),
            'name' => Arr::random(["IPod", "Laptop", "Mobile", "LCD", "Watch"]),
            'appearance' => Arr::random(["Grade A", "Grade B", "Grade C", "Motherboard"]),
            'functionality' => Arr::random(["Working", "Minor Fault"]),
            'color' => Arr::random(["Red", "White", "Blue"]),
            'boxed' => Arr::random(["Original Box", "Unboxed", "UK Boxed"]),
            'additionalInfo' => Str::random(45),
            'qty' => Arr::random([1, 2, 3, 4, 5]),
            'price' => Arr::random([10, 200, 300, 400, 500]),
        ]);
        device::create([
            'brand' => Arr::random(["Apple", "Acer", "Dell", "Samsung", "Lenovo"]),
            'name' => Arr::random(["IPod", "Laptop", "Mobile", "LCD", "Watch"]),
            'appearance' => Arr::random(["Grade A", "Grade B", "Grade C", "Motherboard"]),
            'functionality' => Arr::random(["Working", "Minor Fault"]),
            'color' => Arr::random(["Red", "White", "Blue"]),
            'boxed' => Arr::random(["Original Box", "Unboxed", "UK Boxed"]),
            'additionalInfo' => Str::random(45),
            'qty' => Arr::random([1, 2, 3, 4, 5]),
            'price' => Arr::random([10, 200, 300, 400, 500]),
        ]);
        device::create([
            'brand' => Arr::random(["Apple", "Acer", "Dell", "Samsung", "Lenovo"]),
            'name' => Arr::random(["IPod", "Laptop", "Mobile", "LCD", "Watch"]),
            'appearance' => Arr::random(["Grade A", "Grade B", "Grade C", "Motherboard"]),
            'functionality' => Arr::random(["Working", "Minor Fault"]),
            'color' => Arr::random(["Red", "White", "Blue"]),
            'boxed' => Arr::random(["Original Box", "Unboxed", "UK Boxed"]),
            'additionalInfo' => Str::random(45),
            'qty' => Arr::random([1, 2, 3, 4, 5]),
            'price' => Arr::random([10, 200, 300, 400, 500]),
        ]);
        device::create([
            'brand' => Arr::random(["Apple", "Acer", "Dell", "Samsung", "Lenovo"]),
            'name' => Arr::random(["IPod", "Laptop", "Mobile", "LCD", "Watch"]),
            'appearance' => Arr::random(["Grade A", "Grade B", "Grade C", "Motherboard"]),
            'functionality' => Arr::random(["Working", "Minor Fault"]),
            'color' => Arr::random(["Red", "White", "Blue"]),
            'boxed' => Arr::random(["Original Box", "Unboxed", "UK Boxed"]),
            'additionalInfo' => Str::random(45),
            'qty' => Arr::random([1, 2, 3, 4, 5]),
            'price' => Arr::random([10, 200, 300, 400, 500]),
        ]);
        device::create([
            'brand' => Arr::random(["Apple", "Acer", "Dell", "Samsung", "Lenovo"]),
            'name' => Arr::random(["IPod", "Laptop", "Mobile", "LCD", "Watch"]),
            'appearance' => Arr::random(["Grade A", "Grade B", "Grade C", "Motherboard"]),
            'functionality' => Arr::random(["Working", "Minor Fault"]),
            'color' => Arr::random(["Red", "White", "Blue"]),
            'boxed' => Arr::random(["Original Box", "Unboxed", "UK Boxed"]),
            'additionalInfo' => Str::random(45),
            'qty' => Arr::random([1, 2, 3, 4, 5]),
            'price' => Arr::random([10, 200, 300, 400, 500]),
        ]);
        device::create([
            'brand' => Arr::random(["Apple", "Acer", "Dell", "Samsung", "Lenovo"]),
            'name' => Arr::random(["IPod", "Laptop", "Mobile", "LCD", "Watch"]),
            'appearance' => Arr::random(["Grade A", "Grade B", "Grade C", "Motherboard"]),
            'functionality' => Arr::random(["Working", "Minor Fault"]),
            'color' => Arr::random(["Red", "White", "Blue"]),
            'boxed' => Arr::random(["Original Box", "Unboxed", "UK Boxed"]),
            'additionalInfo' => Str::random(45),
            'qty' => Arr::random([1, 2, 3, 4, 5]),
            'price' => Arr::random([10, 200, 300, 400, 500]),
        ]);
        device::create([
            'brand' => Arr::random(["Apple", "Acer", "Dell", "Samsung", "Lenovo"]),
            'name' => Arr::random(["IPod", "Laptop", "Mobile", "LCD", "Watch"]),
            'appearance' => Arr::random(["Grade A", "Grade B", "Grade C", "Motherboard"]),
            'functionality' => Arr::random(["Working", "Minor Fault"]),
            'color' => Arr::random(["Red", "White", "Blue"]),
            'boxed' => Arr::random(["Original Box", "Unboxed", "UK Boxed"]),
            'additionalInfo' => Str::random(45),
            'qty' => Arr::random([1, 2, 3, 4, 5]),
            'price' => Arr::random([10, 200, 300, 400, 500]),
        ]);
        device::create([
            'brand' => Arr::random(["Apple", "Acer", "Dell", "Samsung", "Lenovo"]),
            'name' => Arr::random(["IPod", "Laptop", "Mobile", "LCD", "Watch"]),
            'appearance' => Arr::random(["Grade A", "Grade B", "Grade C", "Motherboard"]),
            'functionality' => Arr::random(["Working", "Minor Fault"]),
            'color' => Arr::random(["Red", "White", "Blue"]),
            'boxed' => Arr::random(["Original Box", "Unboxed", "UK Boxed"]),
            'additionalInfo' => Str::random(45),
            'qty' => Arr::random([1, 2, 3, 4, 5]),
            'price' => Arr::random([10, 200, 300, 400, 500]),
        ]);
        device::create([
            'brand' => Arr::random(["Apple", "Acer", "Dell", "Samsung", "Lenovo"]),
            'name' => Arr::random(["IPod", "Laptop", "Mobile", "LCD", "Watch"]),
            'appearance' => Arr::random(["Grade A", "Grade B", "Grade C", "Motherboard"]),
            'functionality' => Arr::random(["Working", "Minor Fault"]),
            'color' => Arr::random(["Red", "White", "Blue"]),
            'boxed' => Arr::random(["Original Box", "Unboxed", "UK Boxed"]),
            'additionalInfo' => Str::random(45),
            'qty' => Arr::random([1, 2, 3, 4, 5]),
            'price' => Arr::random([10, 200, 300, 400, 500]),
        ]);
        device::create([
            'brand' => Arr::random(["Apple", "Acer", "Dell", "Samsung", "Lenovo"]),
            'name' => Arr::random(["IPod", "Laptop", "Mobile", "LCD", "Watch"]),
            'appearance' => Arr::random(["Grade A", "Grade B", "Grade C", "Motherboard"]),
            'functionality' => Arr::random(["Working", "Minor Fault"]),
            'color' => Arr::random(["Red", "White", "Blue"]),
            'boxed' => Arr::random(["Original Box", "Unboxed", "UK Boxed"]),
            'additionalInfo' => Str::random(45),
            'qty' => Arr::random([1, 2, 3, 4, 5]),
            'price' => Arr::random([10, 200, 300, 400, 500]),
        ]);
        device::create([
            'brand' => Arr::random(["Apple", "Acer", "Dell", "Samsung", "Lenovo"]),
            'name' => Arr::random(["IPod", "Laptop", "Mobile", "LCD", "Watch"]),
            'appearance' => Arr::random(["Grade A", "Grade B", "Grade C", "Motherboard"]),
            'functionality' => Arr::random(["Working", "Minor Fault"]),
            'color' => Arr::random(["Red", "White", "Blue"]),
            'boxed' => Arr::random(["Original Box", "Unboxed", "UK Boxed"]),
            'additionalInfo' => Str::random(45),
            'qty' => Arr::random([1, 2, 3, 4, 5]),
            'price' => Arr::random([10, 200, 300, 400, 500]),
        ]);
        device::create([
            'brand' => Arr::random(["Apple", "Acer", "Dell", "Samsung", "Lenovo"]),
            'name' => Arr::random(["IPod", "Laptop", "Mobile", "LCD", "Watch"]),
            'appearance' => Arr::random(["Grade A", "Grade B", "Grade C", "Motherboard"]),
            'functionality' => Arr::random(["Working", "Minor Fault"]),
            'color' => Arr::random(["Red", "White", "Blue"]),
            'boxed' => Arr::random(["Original Box", "Unboxed", "UK Boxed"]),
            'additionalInfo' => Str::random(45),
            'qty' => Arr::random([1, 2, 3, 4, 5]),
            'price' => Arr::random([10, 200, 300, 400, 500]),
        ]);
        device::create([
            'brand' => Arr::random(["Apple", "Acer", "Dell", "Samsung", "Lenovo"]),
            'name' => Arr::random(["IPod", "Laptop", "Mobile", "LCD", "Watch"]),
            'appearance' => Arr::random(["Grade A", "Grade B", "Grade C", "Motherboard"]),
            'functionality' => Arr::random(["Working", "Minor Fault"]),
            'color' => Arr::random(["Red", "White", "Blue"]),
            'boxed' => Arr::random(["Original Box", "Unboxed", "UK Boxed"]),
            'additionalInfo' => Str::random(45),
            'qty' => Arr::random([1, 2, 3, 4, 5]),
            'price' => Arr::random([10, 200, 300, 400, 500]),
        ]);


        // clearing the cache
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        return $this->info('Test Account Setup Successfully and Env Clean');
    }
}
