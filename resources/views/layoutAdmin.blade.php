<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>TourAgent | Azerbaijan</title>
     <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <body>

      <div class="container-fluid">
        <div class="row">
          <!--Side bar navigation-->
          <div class="col-md-2">
            <div class="page-header">
              <h1>Admin</h1>
            </div>
            <div class="list-group">
              <a href="/admin/tours" class="list-group-item">
                Turlar
              </a>
              <a href="/admin/agencies" class="list-group-item">Agentliklər</a>
              <a href="/admin/news" class="list-group-item">Xəbərlər</a>
            </div>
          </div>
          <!--/Side bar navigation-->
          <!--content area-->
          <div class="col-md-10">
            <div class="page-header">
              <h1>@yield('page_header')</h1>
            </div>
            @yield('content')
          </div>
          <!--/content area-->
        </div>
      </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/place.js') }}"></script>
  </body>
</html>
