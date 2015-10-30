<!DOCTYPE html>
<html>
    <head>
        <title>Shine</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Fira+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="fonts/BebasNeueBold.otf" type="text/css" charset="utf-8" /> 
        <link rel="stylesheet" href="fonts/BebasNeueRegular.otf" type="text/css" charset="utf-8" /> 
        <link rel="stylesheet" type="text/css" href="css/custom.css">

        <style>
          @font-face {
              font-family: 'Bebas Neue Bold';
              src: url('fonts/BebasNeueBold.eot');
              src: url('fonts/BebasNeueBold.eot?#iefix') format('embedded-opentype'),
                  url('fonts/BebasNeueBold.woff') format('woff'),
                  url('fonts/BebasNeueBold.ttf') format('truetype'),
                  url('fonts/BebasNeueBold.svg#FontName') format('svg');
              font-weight: normal;
              font-style: normal;
          }

          @font-face {
              font-family: 'Bebas Neue Regular';
              src: url('fonts/BebasNeueRegular.eot');
              src: url('fonts/BebasNeueRegular.eot?#iefix') format('embedded-opentype'),
                  url('fonts/BebasNeueRegular.woff') format('woff'),
                  url('fonts/BebasNeueRegular.ttf') format('truetype'),
                  url('fonts/BebasNeueRegular.svg#FontName') format('svg');
              font-weight: normal;
              font-style: normal;
          }
        </style>
    </head>

    <body>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src={{asset('images/shine2_logo.png')}}></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src={{asset('images/hamburger2.png')}}></a>
                <ul class="dropdown-menu">
                  <li><a href="#about">ABOUT</a></li>
                  <li><a href="#testimonials">TESTIMONIALS</a></li>
                  <li><a href="#refer">REFER-A-FRIEND</a></li>
                  <li><a href="#contact">CONTACT</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li id="social-icons"><a href="https://twitter.com/ShineText" target="_blank"><img src={{asset('images/twitter_Icon.png')}}></a></li>
              <li id="social-icons"><a href="https://instagram.com/ShineText" target="_blank"><img src={{asset('images/instagram_Icon.png')}}></a></li>
              <li id="social-icons"><a href="https://www.facebook.com/Shine-Text" target="_blank"><img src={{asset('images/facebook_Icon.png')}}></a></li>
              <li id="nav-refer"><a href="#">REFER FRIENDS</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </body>
</html>


