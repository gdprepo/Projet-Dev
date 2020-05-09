<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Category;
use App\User;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (!$this->isAdmin()) {
            return redirect('home');
        }

        $products = Product::all();

        return view('product/product', ['products' => $products]);
    }

    public function add()
    {
        if (!$this->isAdmin()) {
            return redirect('home');
        }
        $categories = Category::All();

        return view('product/add', ["categories" => $categories]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'image' => ['required'],
            'categories' => ['required'],
        ]);

        $product = new Product;

        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->image = $request->input('image');
        $product->save();
        $product->categories()->attach($request->input('categories'));
        $product->save();

        return back()->withInfo('Product create');
    }

    public function delete($id)
    {
        if (!$this->isAdmin()) {
            return redirect('home');
        }

        $product = Product::find($id);
        $product->delete();

        return back()->withInfo('Delete product');
    }

    public function isAdmin()
    {
        $user = Auth::user();

        return (Auth::check() && $user->role === 'admin');
    }
}
