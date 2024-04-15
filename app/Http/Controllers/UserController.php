<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'login' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($validation)) {
            return redirect('/');
        }
        return redirect()->back()->withErrors(['login' => 'Неверный логин или пароль!']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/auth');
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *

     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(User $user)
    {
        //
    }
}
