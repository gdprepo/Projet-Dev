<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

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
        return view('product/add');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product = new Product;

        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->image = $request->input('image');
        // if ($request->file('image')) {
        //     $file = $request->file('image');
        //     $filename = time().'.'.$file->getClientOriginalExtension();
        //     $location = public_path('/images');
        //     $file->move($location, $filename);
        //     $product->image = $filename;
        //
        // }
        $product->save();

        return view('product/product')->withInfo('Product create');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();

        return back()->withInfo('Delete product');
    }
}
