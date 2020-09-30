<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title', '分享赚') - 小猪分享赚</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
    @include('layouts._header')
    <main role="main" class="list">
        <div class="container">
            @yield('content')
        </div>
    </main>
    @include('layouts._footer')
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>