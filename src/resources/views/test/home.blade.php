@extends('layouts.home_index')

@section('title', 'テストページ - Kazoku')
@push('styles')
    @vite(['resources/css/top.css'])
@endpush
@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-3xl font-bold text-center mb-8">テストページ</h1>
    
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <h2 class="text-xl font-semibold mb-4">画像表示テスト</h2>
        <p class="mb-4">以下の画像が正しく表示されているか確認してください：</p>
        
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-6">
            <div class="text-center">
                <img src="{{ asset('img/user_icon.png') }}" alt="プロフィール" class="w-16 h-16 mx-auto mb-2">
                <p class="text-sm">プロフィール</p>
            </div>
            <div class="text-center">
                <img src="{{ asset('img/search.png') }}" alt="検索" class="w-16 h-16 mx-auto mb-2">
                <p class="text-sm">検索</p>
            </div>
            <div class="text-center">
                <img src="{{ asset('img/music.png') }}" alt="音楽" class="w-16 h-16 mx-auto mb-2">
                <p class="text-sm">音楽</p>
            </div>
            <div class="text-center">
                <img src="{{ asset('img/map.png') }}" alt="マップ" class="w-16 h-16 mx-auto mb-2">
                <p class="text-sm">マップ</p>
            </div>
            <div class="text-center">
                <img src="{{ asset('img/home.png') }}" alt="ホーム" class="w-16 h-16 mx-auto mb-2">
                <p class="text-sm">ホーム</p>
            </div>
            <div class="text-center">
                <img src="{{ asset('img/heart.png') }}" alt="ハート" class="w-16 h-16 mx-auto mb-2">
                <p class="text-sm">ハート</p>
            </div>
            <div class="text-center">
                <img src="{{ asset('img/message.png') }}" alt="メッセージ" class="w-16 h-16 mx-auto mb-2">
                <p class="text-sm">メッセージ</p>
            </div>
        </div>
    </div>
    
    <div class="bg-blue-50 rounded-lg p-6">
        <h3 class="text-lg font-semibold mb-2">レイアウト確認</h3>
        <ul class="space-y-2 text-sm">
            <li>✅ ヘッダーにプロフィールアイコンと検索アイコンが表示されている</li>
            <li>✅ フッターに5つのナビゲーションアイコンが表示されている</li>
            <li>✅ 画像が正しく読み込まれている</li>
            <li>✅ レスポンシブデザインが適用されている</li>
        </ul>
    </div>
</div>
@endsection