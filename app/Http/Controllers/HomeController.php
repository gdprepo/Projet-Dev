<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function compte($id)
    {
        $user = User::find($id);

        return view('compte/information', ['user' => $user]);
    }

    public function check(Request $request, $id)
    {
        $user = User::find($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->image = $request->input('image');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect('home')->withInfo('Product create');

    }

    public function logout()
    {
        Auth::logout();

        return redirect('home');
    }
}
