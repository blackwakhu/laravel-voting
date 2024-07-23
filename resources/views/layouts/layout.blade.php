<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name'))</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header>
            <nav>
                <div class="container">
                    <a href="{{ url('/') }}">{{ config('app.name') }}</a>
                    <ul>
                        <!-- Add your navigation links here -->
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <!-- Add your footer content here -->
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>