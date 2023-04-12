<?php

namespace Database\Seeders;

use Carbon\Carbon;
use GuzzleHttp\Client;
use App\Models\Product;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create('id_ID');
        // Product::create([
        //     'name' => 'Turtle Neck',
        //     'description' => $faker->sentence(5),
        //     'price' => '200000',
        //     'photo' => 'https://img.ws.mms.shopee.co.id/6e6d3194d74157cfe8fbe3d3d6708dd0',
        //     'category_id' => 1,
        // ]);
        $product = [
            [
                'name' => 'Roti Bakar',
                'description' => 'Roti dengan selai anggur',
                'price' => '15000',
                'category_id' => 2,
            ],
            [
                'name' => 'Susu Jahe',
                'description' => 'Dengan jahe asli yang ditumbuk',
                'price' => '5000',
                'category_id' => 1,
            ],
        ];

        foreach ($product as $item) {

            Product::insert([
                'name' => $item['name'],
                'description' => $item['description'],
                'price' => $item['price'],
                'category_id' => $item['category_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
