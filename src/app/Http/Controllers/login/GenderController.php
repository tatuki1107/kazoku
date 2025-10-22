<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GenderController extends Controller
{
    public function show()
    {
        return view('auth.login.gender'); // resources/views/auth/login/gender.blade.php を表示
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





