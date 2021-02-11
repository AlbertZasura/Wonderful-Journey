<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        $article = Article::all();
        $categories = Category::all();
        return view('pages.home', ['articles' => $article, 'categories' => $categories]);
    }

    public function show($id)
    {
        $article = Article::find($id);
        $articles = Article::all();
        return view('pages.story', ['article' => $article, 'articles' => $articles]);
    }

    public function blog()
    {
        $user = Auth::user();
        $articles = Article::where('user_id', $user->id)->get();
        return view('blogs.blog', ['articles' => $articles]);
    }

    public function destroy($id)
    {
        if (!Auth::check()) {
            Article::destroy($id);
            return redirect("/blog");
        }
        return redirect()->home();
    }

    public function create()
    {
        $categories = Category::all();
        return view('blogs.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'image' => 'required|file|image|mimes:jpeg,png,jpg',
            'description' => 'required'
        ]);

        $image = $request->image;
        $category = Category::find($request->category);
        if ($image) {
            $destination_path = 'public/images/' . $category->name;
            $image_name = $image->getClientOriginalName();

            $path = $request->image->storeAs($destination_path, $image_name);
            // str_replace('public', '/storage', Storage::putFileAs('/public/images/products', $request->image, $image_name));
        }

        $article = Article::create([
            'user_id' => Auth::user()->id,
            'category_id' => $request->category,
            'title' => $request->title,
            'description' => $request->description,
            'image' =>  $image_name = $category->name . "/" . $image_name
        ]);

        return redirect('/article/create')->with(['success' => 'Post New Blog Successfully']);
    }
}
