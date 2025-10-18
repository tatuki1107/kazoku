<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResidenceController extends Controller
{
    public function show()
    {
        return view('residence'); // resources/views/residence.blade.php
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

