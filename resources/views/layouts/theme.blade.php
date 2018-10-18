<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>..:: Traning And Placement ::..</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet" />
</head>
  <body>


    <div class="container">
      <div class="row">
        
        @yield('main-body')


      </div>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="{!! asset('js/bootstrap.min.js') !!}" type="text/javascript"></script>




  </body>
</html>
