<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryNames = [
            "Beach", "Mountain", "Forest"
        ];

        for ($i = 0; $i < 3; $i++) {
            $category = new Category;
            $category->fill(["name" => $categoryNames[$i]]);
            $category->save();
        }
    }
}
