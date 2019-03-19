<!-- layout.blade.php -->
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel 5 Example - @yield('title')</title>
        <meta charset="utf-8">
 
        @section('style')
        @show
 
    </head>
    <body>
        <header>
        </header>
 
        <nav>
        </nav>
 
        <section>
            @yield('content')
        </section>
 
        <footer>
        </footer>
 
        @section('script')
        <script src="{{ asset('js/app.js') }}" ></script>
        @show
 
    </body>
</html>