<!DOCTYPE html>
<html>
    <head>
        <title> Tytuł </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{asset('main.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap-3.3.7-dist/css/bootstrap.min.css')}}">
        <script src="{{asset('jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('jqueryscript.js')}}"></script>
       
    </head>
    <body class="container-fluid">
        <div class="row">
         <div class="col-md-2"></div>
          <div class="col-md-8 col-xs-12">
        <nav class="main-menu">
            @include('menu')
        </nav>
          </div>
        </div>
        <div class="row"> 
            <div class="col-md-2"></div>
            <div class="col-md-8 col-xs-12">
        <section>
            <article class="main-article">
                @yield('content')
                </article>
               
        </section>
        </div>
            <div class="col-md-2"></div>
        </div>
        <footer>
            
        </footer>
        <button id="bgChanger" type="button" class="btn btn-danger" onclick="changeBg('{{asset('tlo2.jpg')}}','{{asset('tlo.jpg')}}')">tło</button>
   
   
    </body>
</html>