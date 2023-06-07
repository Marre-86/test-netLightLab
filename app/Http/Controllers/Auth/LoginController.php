<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (auth()->check()) {
            // User is authenticated
            return view('products.create');
        } else {
            // User is not authenticated
            return view('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $username = User::where('email', $request->input('email'))->first()->name;
            flash("Welcome back, {$username}!")->success();

            return redirect()->route('products.create');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
