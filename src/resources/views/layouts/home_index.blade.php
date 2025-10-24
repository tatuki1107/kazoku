<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Kazoku - 家族アプリ')</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
  @stack('styles')  {{-- ページごとのCSSをここで出力 --}}
</head>
<body>
  <header>
    <div class="header_flex">
      <div class="profile_icon">
        <img src="{{ asset('img/user_icon.png') }}" alt="プロフィール">
      </div>
      <div class="header_text">
        <p>xxx</p>
      </div>
      <div class="header_search">
        <a href=""><img src="{{ asset('img/search.png') }}" alt="検索"></a>
      </div>
    </div>
  </header>
    <main class="py-8">
        @yield('content')
    </main>
    <footer>
    <nav>
      <ul>
        <li><a href=""><img src="{{ asset('img/music.png') }}" alt="音楽"></a></li>
        <li><a href=""><img src="{{ asset('img/map.png') }}" alt="マップ"></a></li>
        <li><a href=""><img src="{{ asset('img/home.png') }}" alt="ホーム"></a></li>
        <li><a href=""><img src="{{ asset('img/heart.png') }}" alt="ハート"></a></li>
        <li><a href=""><img src="{{ asset('img/message.png') }}" alt="メッセージ"></a></li>
      </ul>
    </nav>
  </footer>
</body>
</html>
