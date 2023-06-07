<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::truncate();

        Product::create([
            'name' => 'ANRABESS Long Dress',
            'description' => 'Split Maxi Summer Beach Dress with Pockets',
            'price' => 30.59,
            'image' => '1.jpg'
        ]);

        Product::create([
            'name' => 'Bohemian Floral Dress',
            'description' => 'I strongly feel once I put on my “good” bra which has some lift and a small amount of padding that the top will be too tight.',
            'price' => 34.84,
            'image' => '2.jpg'
        ]);


        Product::create([
            'name' => 'Quartz Plastic Watch',
            'description' => 'This Spiderman digital kids watch is the perfect gift for your little one! With a clear, easy to read digital display and accurate Quartz movement, this digital watch is a great accessory that your child will love to wear and use!',
            'price' => 12.83,
            'image' => '3.jpg'
        ]);

        Product::create([
            'name' => 'Under Armour 3.0 Cap',
            'description' => 'UA Classic Fit features a pre-curved visor & structured front panels that maintain shape with a low profile fit.',
            'price' => 15.97,
            'image' => '4.jpg'
        ]);

        Product::create([
            'name' => 'Ski Gloves (Toddler)',
            'description' => 'The waterproof Spyder® Kids Overweb (Little Kids/Big Kids) gloves will give you the protection you need to tackle the wind and snow. These full-coverage gloves are designed with a seam-sealed softshell featuring a 10K laminate Repreve®',
            'price' => 48.29,
            'image' => '5.jpg'
        ]);   
    }
}
