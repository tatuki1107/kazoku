<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BirthDateController extends Controller
{
    public function show()
    {
        return view('auth.login.birth_date'); // resources/views/birth_date.blade.php
    }

    public function store(Request $request)
    {
        $request->validate([
            'birth_date' => 'required|date',
        ]);

        $user = Auth::user();
        $user->birth_date = $request->birth_date;
        $user->save();

        return redirect()->route('residence.show');
    }
}


