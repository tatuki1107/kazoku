@extends('layouts.app')

@section('title', 'ダッシュボード - Kazoku')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="py-8">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">
                ようこそ、{{ Auth::user()->name }}さん！
            </h1>
            <p class="mt-2 text-gray-600">
                家族アプリのダッシュボードへようこそ。
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- 家族メンバーカード -->
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 bg-indigo-500 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">
                                    家族メンバー
                                </dt>
                                <dd class="text-lg font-medium text-gray-900">
                                    1人
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-5 py-3">
                    <div class="text-sm">
                        <a href="#" class="font-medium text-indigo-700 hover:text-indigo-900">
                            メンバーを追加
                        </a>
                    </div>
                </div>
            </div>

            <!-- イベントカード -->
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">
                                    今後のイベント
                                </dt>
                                <dd class="text-lg font-medium text-gray-900">
                                    0件
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-5 py-3">
                    <div class="text-sm">
                        <a href="#" class="font-medium text-indigo-700 hover:text-indigo-900">
                            イベントを追加
                        </a>
                    </div>
                </div>
            </div>

            <!-- メッセージカード -->
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-5">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 truncate">
                                    未読メッセージ
                                </dt>
                                <dd class="text-lg font-medium text-gray-900">
                                    0件
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-5 py-3">
                @foreach($users as $user)
    <div class="bg-gray-50 px-5 py-3">
        <div class="text-sm">
            <!-- <a href="{{ route('messages.index', ['userId' => $user->id]) }}"
                class="font-medium text-indigo-700 hover:text-indigo-900">
                {{ $user->name }} 
            </a> -->
            <a href="{{ route('users.index') }}">ユーザー一覧</a>

        </div>
    </div>
@endforeach

</div>

            </div>
        </div>

        <!-- 最近のアクティビティ -->
        <div class="mt-8">
            <h2 class="text-lg font-medium text-gray-900 mb-4">最近のアクティビティ</h2>
            <div class="bg-white shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <p class="text-gray-500 text-center">
                        まだアクティビティがありません。
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
