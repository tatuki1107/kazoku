@extends('layouts.app')

@section('title', '性別選択')

@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded-xl shadow">
    <h1 class="text-2xl font-bold mb-4 text-center">性別を選択してください</h1>

    <form action="{{ route('gender.store') }}" method="POST">
        @csrf

        <div class="space-y-3">
            <label class="flex items-center space-x-2">
                <input type="radio" name="gender" value="male" class="text-blue-600" required>
                <span>男性</span>
            </label>

            <label class="flex items-center space-x-2">
                <input type="radio" name="gender" value="female" class="text-pink-600" required>
                <span>女性</span>
            </label>
        </div>

        @error('gender')
            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
        @enderror

        <div class="mt-6 text-center">
            <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
                次へ
            </button>
        </div>
    </form>
</div>
@endsection




