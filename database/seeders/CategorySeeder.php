<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ct = [
            [
                'name' => 'Covid 19'
            ],
            [
                'name' => 'Cancer'
            ],
            [
                'name' => 'Military'
            ],
            [
                'name' => 'Police'
            ]
        ];
        foreach ($ct as $category) {
            Category::create($category);
        }
    }
}
