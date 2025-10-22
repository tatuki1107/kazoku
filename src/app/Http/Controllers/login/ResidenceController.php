<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResidenceController extends Controller
{
    public function show()
    {
        return view('auth.login.residence'); // resources/views/residence.blade.php
    }

    public function store(Request $request)
    {
        $request->validate([
            'residence' => 'required|string',
        ]);

        $user = Auth::user();
        $user->residence = $request->residence;
        $user->save();

        return redirect()->route('dashboard');
    }
}

