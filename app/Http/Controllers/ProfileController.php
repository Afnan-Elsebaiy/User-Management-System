<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('profile.index', compact('users'));
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user =User::findOrFail($id);
        return view('profile.profile', compact('user'));
    }


    public function profileUpdate(Request $request, $id)
    {
        $profile = User::findOrFail($id);

        //validation rules
        $user = $request->validate([
            'name' => 'nullable|string',
            'email' => 'nullable|email|string|max:255',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
            'role'=>'nullable|string'
        ]);

        $profile->update($user);

        return redirect()->route('profile.index')->with('message', 'Profile Updated');
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
    }
}