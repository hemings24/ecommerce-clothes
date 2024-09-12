<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   public function run(): void
   {
      \App\Models\Category::factory(6)->create();
      \App\Models\Product::factory(16)->create();
   }
}