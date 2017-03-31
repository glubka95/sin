<!DOCTYPE html>
<html>
    <head>
        <title> Tytuł </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{asset('main.css')}}">
    </head>
    <body>
        <nav class="main-menu">
            @include('menu')
        </nav>
        <section>
            <article class="main-article">
                @yield('content')
                </article>
               
        </section>
        <footer>
            
        </footer>
    </body>
</html>