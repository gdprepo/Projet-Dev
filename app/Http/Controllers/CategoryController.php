<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::all();

        return view('category/category', ['categories' => $categories]);
    }

    public function delete($id)
    {
        $categorie = Category::find($id);
        $categorie->delete();

        return back()->withInfo("Category delete");
    }

}