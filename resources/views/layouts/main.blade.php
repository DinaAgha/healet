<!DOCTYPE html>
<html>

<head>
@include('includes.head')

</head>

<body>

  <!-- header section strats -->
  <header>
 @include('includes.header')
  </header>
  <!-- end header section -->

  <!-- slider section -->
 <section>
    @include('includes.slider')
 </section>
  
  <!-- end slider section -->

 @yield('content')


  <!-- footer section -->
  <footer>
    @include('includes.footer')
  </footer>
  <!-- footer section -->


  <!-- jQery -->
@include('includes.jsfooter')

</body>

</html>