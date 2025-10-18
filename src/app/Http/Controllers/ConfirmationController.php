<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConfirmationController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('confirmation', compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'gender' => 'nullable|string',
            'birth_date' => 'nullable|date',
            'residence' => 'nullable|string',
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->birth_date = $request->birth_date;
        $user->residence = $request->residence;
        $user->save();

        return redirect()->route('dashboard');
    }
}
