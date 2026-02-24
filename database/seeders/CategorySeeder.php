<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'groente', 'description' => 'Verse groenten voor gezonde maaltijden'],
            ['name' => 'fruit', 'description' => 'Vers en smaakvol fruit'],
            ['name' => 'vlees', 'description' => 'Kwaliteitsvlees van de slager'],
            ['name' => 'vis', 'description' => 'Verse vis en zeevruchten'],
            ['name' => 'zuivel', 'description' => 'Melk, kaas, yoghurt en meer'],
            ['name' => 'brood', 'description' => 'Vers gebakken brood en banket'],
            ['name' => 'pasta', 'description' => 'Verschillende soorten pasta'],
            ['name' => 'rijst', 'description' => 'Verschillende rijstsoorten'],
            ['name' => 'snacks', 'description' => 'Gezonde en lekkere snacks'],
            ['name' => 'dranken', 'description' => 'Frisdrank, sap en water'],
            ['name' => 'kruiden', 'description' => 'Verse kruiden en specerijen'],
            ['name' => 'noten', 'description' => 'Verschillende soorten noten'],
            ['name' => 'granen', 'description' => 'Havermout, muesli en granola'],
            ['name' => 'sauzen', 'description' => 'Verschillende sauzen en dressings'],
        ];
        
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
