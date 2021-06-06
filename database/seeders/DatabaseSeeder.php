<?php

namespace Database\Seeders;

use Database\Factories\PostFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory()->create();
         \App\Models\Post::factory(3)->create();
         $this->call(CategorySeeder::class);
         $this->call(SubCategorySeeder::class);
         $this->call(DistrictSeeder::class);
         $this->call(SubDistrictSeeder::class);
//        $this->call(PostSeeder::class); # We Use Faker so We dont Need this But if You want then Remove Post Factory and use this
         $this->call(SettingSeeder::class);
    }
}
