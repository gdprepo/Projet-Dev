<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\User;

class CategoryController extends Controller
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

        $categories = Category::all();

        return view('category/category', ['categories' => $categories]);
    }

    public function add()
    {
        if (!$this->isAdmin()) {
            return redirect('home');
        }

        return view("category/add");
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'image' => ['required'],
        ]);

        $categorie = new Category;

        $categorie->title = $request->input('title');
        $categorie->image  =  $request->input('image');        

        $categorie->save();
        
        return redirect('categories')->withInfo('Category add');
    }

    public function delete($id)
    {
        if (!$this->isAdmin()) {
            return redirect('home');
        }

        $categorie = Category::find($id);
        $categorie->delete();

        return back()->withInfo("Category delete");
    }

    private function isAdmin()
    {
        $user = Auth::user();

        return (Auth::check() && $user->role === "admin");
    }

}