<!DOCTYPE html>
<html lang="en">
<head>
  @include('site.inc.head')
</head>

<body>
  
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        @include('site.inc.nav')      
      </div> <!-- container -->
    </div> <!-- navbar -->
    
    <div class="container"> 
      <div class="row"> 
        <div class="col-md-11">     

          @if (Session::has('message'))
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ Session::get('message') }}
            </div>
          @endif   

          @yield('content')

        </div> <!-- col-md -->
      </div> <!-- row -->
    </div> <!-- container -->
    
  
  <div id="footer">
    <div class="container">
      @include('site.inc.footer')
    </div>
  </div>

</body>
</html>