<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Payment;
use App\Models\Course;
use App\Models\Chapter;
use App\Models\Lecture;
use App\Models\Enroll;

use Illuminate\Support\Facades\Hash;




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
        Chapter::Factory(10)->create();
        Lecture::Factory(10)->create();
        Enroll::Factory(10)->create();


        User::create([
            'name' => 'Super Admin',
            'phone' => '09881234567',
            'address' => 'Monywa',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('123456789'),
            'role' => 'Super Admin',
        ]);
    }
}
