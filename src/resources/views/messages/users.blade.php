<!-- resources/views/users/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="p-4">
    @foreach($users as $user)
        <div class="mb-2">
            <a href="{{ route('messages.index', ['userId' => $user->id]) }}">
            {{ $user->name }}
            <div>
                <p class="text-gray-500 text-sm">
                    {{ $user->latest_message->content ?? 'まだメッセージはありません' }}
                </p>
            </div>
            </a>
        </div>
    @endforeach
</div>
@endsection
