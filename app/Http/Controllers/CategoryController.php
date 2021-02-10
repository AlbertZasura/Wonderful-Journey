<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($name)
    {
        $category = Category::where('name', $name)->first();
        $articles = $category->articles;
        return view('pages.category', ['articles' => $articles, 'name' => $category->name]);
    }
}
