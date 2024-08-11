<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'name' => 'bicycle',
                'description' => 'good bicycle for training or having fun',
                'category'=>'Sports & Outdoors',
                'price' => 3500,
                'condition'=>'Like new',
                'image' => 'images//bicycle.jpg'
            ],
            [
                'name' => 'bike',
                'description' => 'good bike for training or having fun',
                'category'=>'Sports & Outdoors',
                'price' => 2500,
                'condition'=>'New',
                'image' => 'images//bike.jpg'
            ],
            [
                'name' => 'books',
                'description' => '10 different books in good conditions',
                'category'=>'Books & Media',
                'price' => 300,
                'condition'=>'Used',
                'image' => 'images//books.jpg'
            ],
            [
                'name' => 'Orange car',
                'description' => 'orange car that i take care of like my own son in good condition and never something happened to her',
                'category'=>'Sports & Outdoors',
                'price' => 50000,
                'condition'=>'Used',
                'image' => 'images//car_orange.jpg'
            ],
            [
                'name' => 'Couch',
                'description' => 'Couch hasnt pass 2 month in my home still in good condition',
                'category'=>'Home & Furniture',
                'price' => 5000,
                'condition'=>'Like new',
                'image' => 'images//couch.jpg'
            ],
            [
                'name' => 'Skin Cream',
                'description' => 'Cream good for skin of all types',
                'category'=>'Health & Beauty',
                'price' => 150,
                'condition'=>'new',
                'image' => 'images//cream.jpg'
            ],
            [
                'name' => 'Ecran',
                'description' => 'Ecran 28 pousse 144hz 1080p',
                'category'=>'Electronics',
                'price' => 2000,
                'condition'=>'Like new',
                'image' => 'images//ecran.jpg'
            ],
            [
                'name' => 'Laptop',
                'description' => 'Laptop 22 pousse 8gb ram i5-8400k 250gb ssd windows 10',
                'category'=>'Electronics',
                'price' => 2500,
                'condition'=>'Used',
                'image' => 'images//laptop.jpg'
            ],
            [
                'name' => 'Mac',
                'description' => 'Mac 22 pousse 8gb ram 250gb ssd',
                'category'=>'Electronics',
                'price' => 3500,
                'condition'=>'Used',
                'image' => 'images//mac.jpg'
            ],
            [
                'name' => 'Lego',
                'description' => '500 piece of lego',
                'category'=>'Toys & Baby Products',
                'price' => 500,
                'condition'=>'Used',
                'image' => 'images//lego.jpg'
            ],
            [
                'name' => 'Monitor',
                'description' => 'monitor 28 pousse 144hz 1080p',
                'category'=>'Electronic',
                'price' => 1500,
                'condition'=>'Good',
                'image' => 'images//monitor.jpg'
            ],
            [
                'name' => 'Motorcycle',
                'description' => 'race motor cycle with the power of 100 horses',
                'category'=>'Sports & Outdoors',
                'price' => 90000,
                'condition'=>'Like new',
                'image' => 'images//motor.jpg'
            ],
            [
                'name' => 'iphone 14',
                'description' => 'iphone 14 250gb stockage',
                'category'=>'Electronics',
                'price' => 10000,
                'condition'=>'New',
                'image' => 'images//phone.jpg'
            ],
            [
                'name' => 'shampoo',
                'description' => 'good shampoo protect hair from falling and dryness',
                'category'=>'Health & Beauty',
                'price' => 100,
                'condition'=>'New',
                'image' => 'images//shampoo.jpg'
            ],
            [
                'name' => 'toys',
                'description' => 'toys figure of super mario',
                'category'=>'Toys & Baby Products',
                'price' => 400,
                'condition'=>'Like new',
                'image' => 'images//toys.jpg'
            ],
            [
                'name' => 'Weights',
                'description' => 'Weights 50kg 40kg 30kg 20kg 10kg',
                'category'=>'Sports & Outdoors',
                'price' => 500,
                'condition'=>'Like new',
                'image' => 'images//weight.jpg'
            ],
        ];

        foreach ($items as $item) {
            Item::create($item);
        }
    
    }
}
