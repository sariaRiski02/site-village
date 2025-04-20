<?php

namespace Database\Seeders;

use App\Models\Gov;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GovSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Root Node (CEO)
        $ceo = Gov::create([
            'name' => 'Ali CEO',
            'position' => 'Chief Executive Officer',
            'parent' => 0,
            'hirarki' => 1,
            'image' => 'kades.png',
        ]);

        // Manager Nodes
        $manager1 = Gov::create([
            'name' => 'Budi Manager',
            'position' => 'Department Manager',
            'parent' => $ceo->id,
            'hirarki' => 2,
            'image' => 'kades.png',
        ]);

        $manager2 = Gov::create([
            'name' => 'Citra Manager',
            'position' => 'Department Manager',
            'parent' => $ceo->id,
            'hirarki' => 2,
            'image' => 'kades.png',
        ]);
        $manager3 = Gov::create([
            'name' => 'Citra Manager 3',
            'position' => 'Department Manager',
            'parent' => $ceo->id,
            'hirarki' => 2,
            'image' => 'kades.png',
        ]);
        $manager4 = Gov::create([
            'name' => 'Citra Manager 3',
            'position' => 'Department Manager',
            'parent' => $ceo->id,
            'hirarki' => 2,
            'image' => 'kades.png',
        ]);
        $manager5 = Gov::create([
            'name' => 'Citra Manager 3',
            'position' => 'Department Manager',
            'parent' => $ceo->id,
            'hirarki' => 2,
            'image' => 'kades.png',
        ]);

        // Employee Nodes
        Gov::create([
            'name' => 'Dian Engineer',
            'position' => 'Software Engineer',
            'parent' => $manager1->id,
            'hirarki' => 1,
            'image' => 'kades.png',
        ]);
        Gov::create([
            'name' => 'Dian Engineer',
            'position' => 'Software Engineer',
            'parent' => $manager1->id,
            'hirarki' => 1,
            'image' => 'kades.png',
        ]);
        Gov::create([
            'name' => 'Dian Engineer',
            'position' => 'Software Engineer',
            'parent' => $manager1->id,
            'hirarki' => 1,
            'image' => 'kades.png',
        ]);

        Gov::create([
            'name' => 'Eko Engineer',
            'position' => 'Software Engineer',
            'parent' => $manager2->id,
            'hirarki' => 1,
            'image' => 'kades.png',
        ]);
        Gov::create([
            'name' => 'Eko Engineer',
            'position' => 'Software Engineer',
            'parent' => $manager2->id,
            'hirarki' => 1,
            'image' => 'kades.png',
        ]);
    }
}
