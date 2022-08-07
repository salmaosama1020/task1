<html>
 <head>
 <title>App Name - @yield('title')</title>
 <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
 </head>
 <body>
 @include('include.navbar')
 <div class="container">
 @yield('content')
 </div>
 <script src="{{asset('js/popper.js')}}"></script>

 <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
 <script src="{{asset('js/bootstrap.js')}}"></script>



 </body>
</html>
