<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }

    public function update_info(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', auth()->user()->email != $request->email ? Rule::unique('users', 'email') : null],
            'description' => ['max:255']
        ]);

        $request->user()->name = $request->name;
        $request->user()->email = $request->email;
        $request->user()->description = $request->description;

        $request->user()->save();

        return redirect('/profile');
    }

    public function update_password(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'min:8', 'confirmed']
        ]);

        $request->user()->password = $request->password;

        $request->user()->save();

        return redirect('/profile')->with('status', 'password-updated');
    }

    public function destroy(Request $request)
    {
        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
