<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::all();

        return view('product/product', ['products' => $products]);
    }

    public function add()
    {
        $categories = Category::All();

        return view('product/add', ["categories" => $categories]);
    }

    public function store(Request $request)
    {

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
        $product = Product::find($id);
        $product->delete();

        return back()->withInfo('Delete product');
    }
}
