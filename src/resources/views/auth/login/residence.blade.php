@extends('layouts.app')

@section('title', '居住地の入力')

@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded-xl shadow">
    <h1 class="text-2xl font-bold mb-4 text-center">居住地を選択してください</h1>

    <form action="{{ route('residence.store') }}" method="POST" id="residence-form">
        @csrf

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-1">都道府県</label>
            <select id="residence" name="residence" class="w-full border rounded-md p-2 text-center overflow-y-scroll h-48">
                <option value="" selected>ーーー 県</option>
                @php
                    $prefectures = [
                        '北海道', '青森県', '岩手県', '宮城県', '秋田県', '山形県', '福島県',
                        '茨城県', '栃木県', '群馬県', '埼玉県', '千葉県', '東京都', '神奈川県',
                        '新潟県', '富山県', '石川県', '福井県', '山梨県', '長野県',
                        '岐阜県', '静岡県', '愛知県', '三重県',
                        '滋賀県', '京都府', '大阪府', '兵庫県', '奈良県', '和歌山県',
                        '鳥取県', '島根県', '岡山県', '広島県', '山口県',
                        '徳島県', '香川県', '愛媛県', '高知県',
                        '福岡県', '佐賀県', '長崎県', '熊本県', '大分県', '宮崎県', '鹿児島県', '沖縄県'
                    ];
                @endphp

                @foreach ($prefectures as $pref)
                    <option value="{{ $pref }}">{{ $pref }}</option>
                @endforeach
            </select>
            @error('residence')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="text-center">
            <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
                次へ
            </button>
        </div>
    </form>
</div>
@endsection


