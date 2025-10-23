@extends('layouts.app')

@section('title', '生年月日入力')

@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded-xl shadow">
    <h1 class="text-2xl font-bold mb-4 text-center">生年月日を入力してください</h1>

    <form action="{{ route('birthdate.store') }}" method="POST" id="birthdate-form">
        @csrf

        <div class="flex justify-between space-x-2 mb-6">
            <!-- 年 -->
            <div class="flex-1">
                <label class="block text-sm font-medium text-gray-700 mb-1">年</label>
                <select id="year" class="w-full border rounded-md p-2 text-center overflow-y-scroll h-40">
                    @for ($y = 1900; $y <= now()->year; $y++)
                        <option value="{{ $y }}" {{ $y == 2000 ? 'selected' : '' }}>{{ $y }}</option>
                    @endfor
                </select>
            </div>

            <!-- 月 -->
            <div class="flex-1">
                <label class="block text-sm font-medium text-gray-700 mb-1">月</label>
                <select id="month" class="w-full border rounded-md p-2 text-center overflow-y-scroll h-40">
                    @for ($m = 1; $m <= 12; $m++)
                        <option value="{{ sprintf('%02d', $m) }}" {{ $m == 12 ? 'selected' : '' }}>
                            {{ $m }}
                        </option>
                    @endfor
                </select>
            </div>

            <!-- 日 -->
            <div class="flex-1">
                <label class="block text-sm font-medium text-gray-700 mb-1">日</label>
                <select id="day" class="w-full border rounded-md p-2 text-center overflow-y-scroll h-40">
                    @for ($d = 1; $d <= 31; $d++)
                        <option value="{{ sprintf('%02d', $d) }}" {{ $d == 12 ? 'selected' : '' }}>
                            {{ $d }}
                        </option>
                    @endfor
                </select>
            </div>
        </div>

        <!-- 送信用 hidden -->
        <input type="hidden" name="birth_date" id="birth_date_input">

        @error('birth_date')
            <p class="text-red-500 text-sm mb-2">{{ $message }}</p>
        @enderror

        <div class="text-center">
            <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
                次へ
            </button>
        </div>
    </form>
</div>

<script>
document.getElementById('birthdate-form').addEventListener('submit', function (e) {
    const y = document.getElementById('year').value;
    const m = document.getElementById('month').value;
    const d = document.getElementById('day').value;
    document.getElementById('birth_date_input').value = `${y}-${m}-${d}`;
});
</script>
@endsection


