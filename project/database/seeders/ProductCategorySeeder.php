<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductCategory::create([
            "id"=>1,
            "name"=>'Root',
            "slug"=>'root',
            "image"=>'demo.jpg',
        ]);
        ProductCategory::create([
            "parent_id"=>1,
            "name"=>'Clothes',
            "slug"=>'clothes',
            "image"=>'demo1.jpg',
        ]);
        ProductCategory::create([
            "parent_id"=>2,
            "name"=>'Women',
            "slug"=>'women',
            "image"=>'demo3.jpg',
        ]);
        ProductCategory::create([
            "parent_id"=>2,
            "name"=>'Men',
            "slug"=>'men',
            "image"=>'demo2.jpg',
        ]);
        

    }
}
