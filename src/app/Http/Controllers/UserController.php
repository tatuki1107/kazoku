<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $currentUser = Auth::user();

        // 自分以外の全ユーザーを取得
        $users = User::where('id', '!=', $currentUser->id)->get();

        // 各ユーザーとの最新メッセージを取得して紐づけ
        foreach ($users as $user) {
            $latestMessage = Message::where(function ($query) use ($currentUser, $user) {
                $query->where('sender_id', $currentUser->id)
                        ->where('receiver_id', $user->id);
            })->orWhere(function ($query) use ($currentUser, $user) {
                $query->where('sender_id', $user->id)
                        ->where('receiver_id', $currentUser->id);
            })
            ->latest('created_at')
            ->first();

            $user->latest_message = $latestMessage;
        }

        return view('messages.users', compact('users'));
    }
}
