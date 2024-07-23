<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = new Products;
        $product->productNumber = '7492';
        $product->productName = 'KSL Sweets';
        $product->productPrice = '3';
        $product->category_id = '1';
        $product->productDescription = 'Yummy minty flavour';
        $product->measurement = 'grams';
        $product->productImagePath = '../images/customerbox-aXq1oCCjlVM-unsplash.jpg';
        $product->productQuantity = '300';
        $product->save();

        $product = new Products;
        $product->productNumber = '591';
        $product->productName = 'Eclairs';
        $product->productPrice = '10';
        $product->category_id = '1';
        $product->productDescription = 'Chewy chocolate';
        $product->measurement = 'grams';
        $product->productImagePath = '../images/customerbox-aXq1oCCjlVM-unsplash.jpg';
        $product->productQuantity = '150';
        $product->save();

        $product = new Products;
        $product->productNumber = '4923';
        $product->productName = 'Pringles';
        $product->productPrice = '150';
        $product->category_id = '3';
        $product->productDescription = 'Baked sliced potatoes';
        $product->measurement = 'grams';
        $product->productImagePath = '../images/customerbox-aXq1oCCjlVM-unsplash.jpg';
        $product->productQuantity = '300';
        $product->save();

        $product = new Products;
        $product->productNumber = '9292';
        $product->productName = 'Fanta Orange';
        $product->productPrice = '60';
        $product->category_id = '4';
        $product->productDescription = 'fizzy orange flavor';
        $product->measurement = 'ml';
        $product->productImagePath = '../images/customerbox-aXq1oCCjlVM-unsplash.jpg';
        $product->productQuantity = '300';
        $product->save();
    }
}
