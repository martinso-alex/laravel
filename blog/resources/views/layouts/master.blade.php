<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="../css/blog.css" rel="stylesheet">
  </head>

  <body>

	@include('layouts.nav')

    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">

			    @yield('content')

        </div><!-- /.blog-main -->

        <div class="col-sm-3 offset-sm-1 blog-sidebar">

          @include('layouts.sidebar')

        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

	  </div><!-- /.container -->
	
	@include('layouts.footer')

  </body>
</html>
