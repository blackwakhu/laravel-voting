<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name'))</title>

      <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <div id="app">
      <header>
        <nav>
          <div class="container navbar">
            <a href="{{ route('home') }}" class="active">
              {{ config('app.name') }}
            </a>
            <a href="{{ route('home') }}">
              Home
            </a>
            <a href="{{ route('questions.index')}}">
              Questions
            </a>
            <a href="{{ route('questions.create') }}">
              Create Question
            </a>
            <a href="{{ route('choices.index') }}">
              Choices
            </a>
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
    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>