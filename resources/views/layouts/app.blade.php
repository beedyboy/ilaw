<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{ asset('images/fav.png') }}">
  <title>iLaw - @yield('title')</title>
  
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/responsive.css') }}"> 
    @yield('head')
 
</head>
<body> 
  <input type="hidden" id="url" value="{{ url('') }}">
  @include('layouts.header')
  @yield('content')
 
  
  <footer>
    
      @include('layouts.footer')
  </footer>
 

<!-- jQuery -->
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script> 
<script src="{{ asset('js/popper.min.js') }}"></script> 
<!-- Bootstrap 4 -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script> 

 
 
<script>
      $(document).ready (function(){
        $('.menu-toggle').click(function(){
          $('.menu-toggle').toggleClass('active')
          $('.menu').toggleClass('active')
        })
      })
</script>

<script>
      $('.counting').each(function() {
        var $this = $(this),
        countTo = $this.attr('data-count');
  
      $({ countNum: $this.text()}).animate({
        countNum: countTo
        },

      {

      duration: 3000,
      easing:'linear',
      step: function() {
      $this.text(Math.floor(this.countNum));
    },
      complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

    });  
  

  });
    </script>
  
  
</body>
</html>