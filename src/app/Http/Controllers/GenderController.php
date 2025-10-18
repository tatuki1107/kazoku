<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GenderController extends Controller
{
    public function show()
    {
        return view('gender'); // resources/views/gender.blade.php を表示
    }

    public function store(Request $request)
    {
        $request->validate([
            'gender' => 'required|in:male,female',
        ]);

        $user = Auth::user();
        $user->gender = $request->gender;
        $user->save();

        return redirect()->route('birthdate.show');
    }
}





