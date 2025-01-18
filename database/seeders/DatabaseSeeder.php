<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Payment;
use App\Models\Course;
use App\Models\Order;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       // User::factory()->create([
           // 'name' => 'Test User',
           // 'email' => 'test@example.com',
        //]);
        Category::Factory(10)->create();
        Payment::Factory(10)->create();
        Course::Factory(10)->create();
        Order::Factory(10)->create();

    }
}
