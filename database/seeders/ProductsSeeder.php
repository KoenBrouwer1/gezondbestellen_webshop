<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
        use WithoutModelEvents;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            // Groente (1)
            ['name' => 'tomaat', 'description' => 'Verse rode tomaten', 'category_id' => 1, 'price' => 2.49],
            ['name' => 'komkommer', 'description' => 'Knapperige komkommer', 'category_id' => 1, 'price' => 1.29],
            ['name' => 'paprika', 'description' => 'Rode, gele en groene paprika', 'category_id' => 1, 'price' => 1.99],
            ['name' => 'wortel', 'description' => 'Verse wortels', 'category_id' => 1, 'price' => 0.99],
            ['name' => 'sla', 'description' => 'Verse krop sla', 'category_id' => 1, 'price' => 1.49],
            ['name' => 'broccoli', 'description' => 'Groene broccoli', 'category_id' => 1, 'price' => 1.79],
            ['name' => 'spinazie', 'description' => 'Verse bladspinzie', 'category_id' => 1, 'price' => 1.99],
            
            // Fruit (2)
            ['name' => 'appel', 'description' => 'Zoete appels', 'category_id' => 2, 'price' => 2.99],
            ['name' => 'banaan', 'description' => 'Rijpe bananen', 'category_id' => 2, 'price' => 1.49],
            ['name' => 'sinaasappel', 'description' => 'Sappige sinaasappels', 'category_id' => 2, 'price' => 2.49],
            ['name' => 'aardbei', 'description' => 'Verse aardbeien', 'category_id' => 2, 'price' => 3.99],
            ['name' => 'druiven', 'description' => 'Witte en blauwe druiven', 'category_id' => 2, 'price' => 2.79],
            ['name' => 'mango', 'description' => 'Tropische mango', 'category_id' => 2, 'price' => 1.99],
            
            // Vlees (3)
            ['name' => 'kipfilet', 'description' => 'Verse kipfilet', 'category_id' => 3, 'price' => 6.99],
            ['name' => 'gehakt', 'description' => 'Mager rundergehakt', 'category_id' => 3, 'price' => 5.49],
            ['name' => 'biefstuk', 'description' => 'Malse biefstuk', 'category_id' => 3, 'price' => 12.99],
            ['name' => 'varkenshaas', 'description' => 'Mals varkensvlees', 'category_id' => 3, 'price' => 8.99],
            
            // Vis (4)
            ['name' => 'zalm', 'description' => 'Verse zalmfilet', 'category_id' => 4, 'price' => 9.99],
            ['name' => 'tonijn', 'description' => 'Verse tonijn', 'category_id' => 4, 'price' => 11.99],
            ['name' => 'garnalen', 'description' => 'Verse garnalen', 'category_id' => 4, 'price' => 7.99],
            ['name' => 'kabeljauw', 'description' => 'Verse kabeljauw', 'category_id' => 4, 'price' => 8.49],
            
            // Zuivel (5)
            ['name' => 'melk', 'description' => 'Volle melk', 'category_id' => 5, 'price' => 1.19],
            ['name' => 'yoghurt', 'description' => 'Griekse yoghurt', 'category_id' => 5, 'price' => 2.29],
            ['name' => 'kaas', 'description' => 'Hollandse kaas', 'category_id' => 5, 'price' => 4.99],
            ['name' => 'boter', 'description' => 'Roomboter', 'category_id' => 5, 'price' => 2.49],
            ['name' => 'eieren', 'description' => 'Verse scharreleieren', 'category_id' => 5, 'price' => 3.49],
            
            // Brood (6)
            ['name' => 'volkorenbrood', 'description' => 'Vers volkorenbrood', 'category_id' => 6, 'price' => 2.19],
            ['name' => 'wit brood', 'description' => 'Vers wit brood', 'category_id' => 6, 'price' => 1.89],
            ['name' => 'croissant', 'description' => 'Verse croissants', 'category_id' => 6, 'price' => 2.99],
            ['name' => 'bagel', 'description' => 'Verse bagels', 'category_id' => 6, 'price' => 2.49],
            
            // Pasta (7)
            ['name' => 'spaghetti', 'description' => 'Italiaanse spaghetti', 'category_id' => 7, 'price' => 1.49],
            ['name' => 'penne', 'description' => 'Penne pasta', 'category_id' => 7, 'price' => 1.59],
            ['name' => 'fusilli', 'description' => 'Spiraal pasta', 'category_id' => 7, 'price' => 1.69],
            ['name' => 'lasagne', 'description' => 'Lasagne bladen', 'category_id' => 7, 'price' => 2.29],
            
            // Rijst (8)
            ['name' => 'basmati rijst', 'description' => 'Geurige basmati rijst', 'category_id' => 8, 'price' => 3.49],
            ['name' => 'jasmijn rijst', 'description' => 'Thaise jasmijn rijst', 'category_id' => 8, 'price' => 3.29],
            ['name' => 'zilvervliesrijst', 'description' => 'Gezonde zilvervliesrijst', 'category_id' => 8, 'price' => 2.99],
            
            // Snacks (9)
            ['name' => 'chips', 'description' => 'Knapperige chips', 'category_id' => 9, 'price' => 2.49],
            ['name' => 'popcorn', 'description' => 'Verse popcorn', 'category_id' => 9, 'price' => 1.99],
            ['name' => 'crackers', 'description' => 'Volkoren crackers', 'category_id' => 9, 'price' => 2.29],
            ['name' => 'noten mix', 'description' => 'Gemengde noten', 'category_id' => 9, 'price' => 4.99],
            
            // Dranken (10)
            ['name' => 'water', 'description' => 'Bronwater', 'category_id' => 10, 'price' => 0.89],
            ['name' => 'sinaasappelsap', 'description' => 'Vers geperst sap', 'category_id' => 10, 'price' => 2.99],
            ['name' => 'cola', 'description' => 'Frisdrank', 'category_id' => 10, 'price' => 1.79],
            ['name' => 'thee', 'description' => 'Groene thee', 'category_id' => 10, 'price' => 3.49],
            
            // Kruiden (11)
            ['name' => 'basilicum', 'description' => 'Vers basilicum', 'category_id' => 11, 'price' => 1.49],
            ['name' => 'oregano', 'description' => 'Gedroogde oregano', 'category_id' => 11, 'price' => 2.29],
            ['name' => 'knoflook', 'description' => 'Verse knoflook', 'category_id' => 11, 'price' => 1.99],
            ['name' => 'peper', 'description' => 'Zwarte peper', 'category_id' => 11, 'price' => 3.99],
            
            // Noten (12)
            ['name' => 'amandelen', 'description' => 'Ongezouten amandelen', 'category_id' => 12, 'price' => 5.99],
            ['name' => 'walnoten', 'description' => 'Verse walnoten', 'category_id' => 12, 'price' => 6.49],
            ['name' => 'cashewnoten', 'description' => 'Cashewnoten', 'category_id' => 12, 'price' => 5.49],
            ['name' => 'pinda\'s', 'description' => 'Gezouten pinda\'s', 'category_id' => 12, 'price' => 3.99],
            
            // Granen (13)
            ['name' => 'havermout', 'description' => 'Gezonde havermout', 'category_id' => 13, 'price' => 2.49],
            ['name' => 'muesli', 'description' => 'Fruit muesli', 'category_id' => 13, 'price' => 3.99],
            ['name' => 'granola', 'description' => 'Knapperige granola', 'category_id' => 13, 'price' => 4.49],
            
            // Sauzen (14)
            ['name' => 'tomatensaus', 'description' => 'Italiaanse tomatensaus', 'category_id' => 14, 'price' => 1.99],
            ['name' => 'mayonaise', 'description' => 'Romige mayonaise', 'category_id' => 14, 'price' => 2.49],
            ['name' => 'ketchup', 'description' => 'Tomatenketchup', 'category_id' => 14, 'price' => 1.79],
            ['name' => 'sojasaus', 'description' => 'Authentieke sojasaus', 'category_id' => 14, 'price' => 3.29],
            ];
        
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
