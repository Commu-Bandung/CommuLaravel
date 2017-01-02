<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">      

        {{-- <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> --}}
        <!-- Styles -->
        <style type="text/css">
         @import url(http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900);
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


            [am-LatoSans] {
              font-family: 'Lato', sans-serif;
            }
            [am-TopLogo] {
                max-height: 70px;
                max-width: 210px;
                margin: 12px 11px;
            }
            [am-CallNow] {
                font-weight: 200;
                color: #333;
                vertical-align: middle;
                line-height: 35px;
                font-size: 19px;
                padding-right: 8px;
            }
            /*
              Relevant styles below
            */
            .topper {
              display: flex;
              justify-content: space-between;
              align-items: flex-end;
            }

            .navbar.navbar-inverse {
              background-image: linear-gradient(#9f9f9f, #535353 3%, #1f1f1f 17%, #212121 49%, #191919 89%, #000000 100%);
              border-top: 1px inset rgba(255, 255, 255, 0.1);
              box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.5);
              border-radius: 10px;
              margin-top: 10px;
            }

            .navbar .navbar-nav > li > a {
              color: #d1d1d1;
              font-weight: 700;
              text-rendering: optimizeLegibility;
              text-shadow: 0px -1px black, 0px 1px rgba(255, 255, 255, 0.25);
              line-height: 18px;
            }

            .navbar .navbar-nav > li.active {
              color: #f8f8f8;
              background-color: #080808;
              box-shadow: inset 0px -28px 23px -21px rgba(255, 255, 255, 0.15);
              border-left: 1px solid #2A2A2A;
              border-right: 1px solid #272727;
            }

            .btn.btn-gradient-blue {
              background-color: #0c5497 !important;
              background-image: -webkit-linear-gradient(top, #127bde 0%, #072d50 100%);
              background-image: -o-linear-gradient(top, #127bde 0%, #072d50 100%);
              background-image: linear-gradient(to bottom, #127bde 0%, #072d50 100%);
              background-repeat: repeat-x;
              filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff127bde', endColorstr='#ff072d50', GradientType=0);
              border-color: #072d50 #072d50 #0c5497;
              color: #fff !important;
              text-shadow: 0 -1px 0 rgba(31, 31, 31, 0.29);
              -webkit-font-smoothing: antialiased;
            }

        </style>
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    </head>
    <body>

      <div class="container">
  <!-- Topper w/ logo -->
  
  <!-- Navigation -->
  <div class="row">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand visible-xs-inline-block nav-logo" href="/"><img src="" class="img-responsive" alt=""></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav js-nav-add-active-class">
            <li><a href="#">Home</a></li>
            <li><a href="#">Pengajuan</a></li>
            <li><a href="#">About</a></li>
            <li class="visible-xs-block"><a href="#">About Us</a></li>
            <li class="visible-xs-block"><a href="#">Careers</a></li>
            <li class="visible-xs-block"><a href="#">Press Release</a></li>
            <li class="visible-xs-block"><a href="#">Support</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hasil proposal <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">View Review</a></li>
                <li><a href="#">Terima Bantuan</a></li>
                <li><a href="#">Kerjasama</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right hidden-xs">
            <a type="button" class="navbar-btn btn btn-gradient-blue" am-latosans="bold"  href="{{ url('/login') }}">Login</a>
            <a type="button" class="navbar-btn btn btn-gradient-blue" am-latosans="bold"  href="{{ url('/register') }}">Register</a>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
  </div>
</div>
<script type="text/javascript">

</script>

      <div class="container">
        <h1>@yield('title') </h1>
        @yield('content')
      </div>     

    </body>
</html>
