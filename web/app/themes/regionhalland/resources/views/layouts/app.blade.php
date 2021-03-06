<?php
  if (!isset($_SESSION)) {
      session_start();
  }
  if(isset($_SESSION['rollo']) && !empty($_SESSION['rollo'])) {
    echo 'Set and not empty, and no undefined index error!';
  } else {
    echo 'Not set yet';
  }
?>  
<!doctype html>
<html>
  @include('partials.head')
  <body @php body_class() @endphp>
    <div class="container mx-auto" style="box-shadow: 0px 0px 5px #888888;">
        @include('partials.cookie-notice')
        @include('partials.header')
        <div class="col-12 flex content-stretch">
            <div class="container col-12 mx-auto">
                @yield('content')
                @include('partials.footer')
            </div>
        </div>
    </div>
  </body>
</html>