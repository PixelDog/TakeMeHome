<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Take Me Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layout.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/form.css') }}">
    </head>
    <body>
        <div class="main">
            <header>
                <div class="inner header-title">
                    <h1>Take Me Home</h1>
                </div>
            </header>
            <div id="app">
                <pet-search></pet-search>
            </div>
        </div>
        <footer >
            <div class="inner">
                <div class="footer-info">Powered by <a href="https://www.adoptapet.com/">Adopt-a-Pet</a></div>
            </div>
            <script src="{{asset('js/app.js')}}"></script>
        </footer>
    </body>
</html>
