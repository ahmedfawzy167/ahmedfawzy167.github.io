<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="templatemo">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>@yield('title')</title>

@include('basic.head-assets')

</head>

<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!-- PRE LOADER -->

   <div class="preloader">
    <div class="spinner">
         <span class="spinner-rotate"></span>
    </div>
   </div>
   
    @include('basic.nav')
    
    @yield('content')

    @include('basic.footer')

    @include('basic.footer-assets')
    
    @yield('scripts')

</body>

</html>

