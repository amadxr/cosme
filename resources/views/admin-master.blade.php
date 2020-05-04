<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cosme Rodriguez</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg mb-3">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand mb-0 h1" href="{{ route('admin-home') }}">Cosme Rodriguez</a>
                </div>                
            </div>
        </nav>
        @yield('content')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>