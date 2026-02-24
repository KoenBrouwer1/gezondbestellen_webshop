<?php

namespace Database\Seeders;

// use App\Models\Cart;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            ProductsSeeder::class,
                ]);
                
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => ('password'),
            ]);
        // Cart::factory(10)->create();
    }

}
