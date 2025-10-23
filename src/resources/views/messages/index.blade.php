<!-- @extends('layouts.app') -->

@section('content')
<div class="flex h-screen">
    <!-- チャット画面 -->
    <div class="w-2/3 flex flex-col">
        <a href="{{ route('users.index') }}" class="text-indigo-600 hover:text-indigo-800 text-sm">
        <--
        </a>

        <div class="p-4 border-b font-semibold text-lg">{{ $receiver->name }}</div>

        <div class="flex-1 overflow-y-auto p-4 space-y-3 bg-gray-50">
        @foreach($messages as $message)
            @if($message->sender_id === auth()->id())
                <!-- 自分のメッセージ -->
                <div class="flex justify-end mb-2">
                    <div class="flex items-end space-x-1 max-w-xs">
                        <!-- 時間を左 -->
                        <span class="text-xs text-gray-400">
                            {{ $message->created_at->format('H:i') }}
                        </span>
                        <!-- メッセージ本体 -->
                        <div class="bg-indigo-500 text-white rounded-2xl px-4 py-2">
                            <p>{{ $message->content }}</p>
                        </div>
                    </div>
                </div>
            @else
                <!-- 相手のメッセージ -->
                <div class="flex justify-start mb-2">
                    <div class="flex items-end space-x-1 max-w-xs">
                        <!-- メッセージ本体 -->
                        <div class="bg-gray-200 text-gray-800 rounded-2xl px-4 py-2">
                            <p>{{ $message->content }}</p>
                        </div>
                        <!-- 時間を右 -->
                        <span class="text-xs text-gray-500">
                            {{ $message->created_at->format('H:i') }}
                        </span>
                    </div>
                </div>
            @endif
        @endforeach

</div>

        <!-- 送信フォーム -->
        <form method="POST" action="{{ route('messages.store') }}" class="p-4 border-t flex">
            @csrf
            <input type="hidden" name="receiver_id" value="{{ $receiver->id }}">
            <input type="text" name="content" placeholder="メッセージを入力..."
                    class="flex-1 border rounded-full px-4 py-2 focus:outline-none focus:ring focus:border-indigo-400">
            <button type="submit" class="ml-2 bg-indigo-500 text-white rounded-full px-4 py-2 hover:bg-indigo-600">
                送信
            </button>
        </form>
    </div>
</div>
@endsection
