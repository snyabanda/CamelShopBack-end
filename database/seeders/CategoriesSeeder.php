<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = new Categories;
        $category->name = 'Sweets';
        $category->save();

        $category = new Categories;
        $category->name = 'Chocolates';
        $category->save();

        $category = new Categories;
        $category->name = 'Crisps';
        $category->save();

        $category = new Categories;
        $category->name = 'Juice';
        $category->save();

        $category = new Categories;
        $category->name = 'Soda';
        $category->save();

        $category = new Categories;
        $category->name = 'Biscuits';
        $category->save();
    }
}
