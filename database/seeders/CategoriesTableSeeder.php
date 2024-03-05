<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Music',
            'Sports',
            'Arts & Theater',
            'Food & Drink',
            'Technology',
            'Business & Networking',
            'Health & Wellness',
            'Education',
            'Family & Kids',
            'Travel & Outdoor',
        ];

        foreach ($categories as $categoryName) {
            Category::create([
                'name' => $categoryName,
            ]);
        }
    }
}
