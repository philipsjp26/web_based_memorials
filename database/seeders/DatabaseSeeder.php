<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Relationship;
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
        if (Category::count() == 0) {
            $this->call(CategorySeeder::class);
        } elseif (Relationship::count() == 0) {
            $this->call(RelationshipSeeder::class);
        }
    }
}
