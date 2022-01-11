<?php

namespace Database\Seeders;

use App\Models\Relationship;
use Illuminate\Database\Seeder;

class RelationshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $relation = [
            [
                'name' => 'Aunt'
            ],
            [
                'name' => 'Boyfriend'
            ],
            [
                'name' => 'Brother'
            ],
            [
                'name' => 'Colleague'
            ],
            [
                'name' => 'Cousin'
            ],
            [
                'name' => 'Daughter'
            ],
            [
                'name' => 'Father'
            ],
            [
                'name' => 'Friend'
            ],
            [
                'name' => 'Girl Friend'
            ],
            [
                'name' => 'Grand Daughter'
            ],
            [
                'name' => 'Grand Father'
            ],
            [
                'name' => 'Grand Mother'
            ],
            [
                'name' => 'Grand Son'
            ],
            [
                'name' => 'Husband'
            ],
            [
                'name' => 'Mother'
            ],
            [
                'name' => 'Nephew'
            ],
            [
                'name' => 'Niece'
            ],
            [
                'name' => 'Sister'
            ],
            [
                'name' => 'Other'
            ],
            [
                'name' => 'No Relationship'
            ]
        ];
        foreach ($relation as $rt) {
            Relationship::create($rt);
        }
    }
}
