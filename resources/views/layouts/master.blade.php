<!DOCTYPE html>
<html>
    <head>
    <!-- Google Analytics Content Experiment code -->
    <script>function utmx_section(){}function utmx(){}(function(){var
    k='110204361-0',d=document,l=d.location,c=d.cookie;
    if(l.search.indexOf('utm_expid='+k)>0)return;
    function f(n){if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.
    indexOf(';',i);return escape(c.substring(i+n.length+1,j<0?c.
    length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;d.write(
    '<sc'+'ript src="'+'http'+(l.protocol=='https:'?'s://ssl':
    '://www')+'.google-analytics.com/ga_exp.js?'+'utmxkey='+k+
    '&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='+new Date().
    valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
    '" type="text/javascript" charset="utf-8"><\/sc'+'ript>')})();
    </script><script>utmx('url','A/B');</script>
    <!-- End of Google Analytics Content Experiment code -->
        <title>Shine</title>
        <link rel="shortcut icon" href="//shinetext.herokuapp.com/images/favicon.ico" type="image/vnd.microsoft.icon" />
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="gTB0hFF4-O-uJPb_LaecZMR3Mbr76ozK_1l5mEAzOPE" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://code.cdn.mozilla.net/fonts/fira.css">
        <link href="{{ asset('css/index.css') }}" rel="stylesheet" type="text/css" >

      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-68971267-1', 'auto');
        ga('send', 'pageview');

      </script>
    </head>

    <body>
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only"></span><img src={{asset('images/hamburger.png')}}>
            </button>
            <a class="navbar-brand hidden-sm hidden-md hidden-lg" href="#"><img src={{asset('images/shine2_logo.png')}}></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle hidden-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src={{asset('images/hamburger.png')}}></a>
                <a href="#about" class="dropdown-toggle hidden-sm hidden-md hidden-lg">ABOUT</a>
                <a href="#testimonials" class="dropdown-toggle hidden-sm hidden-md hidden-lg">TESTIMONIALS</a>
                <a href="#press" class="dropdown-toggle hidden-sm hidden-md hidden-lg">PRESS</a>
                <a href="#refer" class="dropdown-toggle hidden-sm hidden-md hidden-lg">REFER-A-FRIEND</a>
                <a href="https://blog.shinetext.com/latest" target="_blank" class="dropdown-toggle hidden-sm hidden-md hidden-lg">BLOG</a>
                <a href="#partners" class="dropdown-toggle hidden-sm hidden-md hidden-lg">PARTNERS</a>
                <a href="#contact" class="dropdown-toggle hidden-sm hidden-md hidden-lg">CONTACT</a>

                <ul class="dropdown-menu dropdown-toggle hidden-xs">
                  <li><a href="#about">ABOUT</a></li>
                  <li><a href="#testimonials">TESTIMONIALS</a></li>
                  <li><a href="#press">PRESS</a></li>
                  <li><a href="#refer">REFER-A-FRIEND</a></li>
                  <li><a href="https://blog.shinetext.com/latest" target="_blank">BLOG</a></li>
                  <li><a href="#partners">PARTNERS</a></li>
                  <li><a href="#contact">CONTACT</a></li>
                </ul>
              </li>

              <li class="hidden-xs"><a href="#"><img src={{asset('images/shine2_logo.png')}}></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="hidden-xs" id="social-icons"><a href="https://twitter.com/ShineText" target="_blank"><img src={{asset('images/twitter_Icon.png')}}></a></li>
              <li class="hidden-xs" id="social-icons"><a href="https://instagram.com/ShineText" target="_blank"><img src={{asset('images/instagram_Icon.png')}}></a></li>
              <li class="hidden-xs" id="social-icons"><a href="https://www.facebook.com/Shine-Text" target="_blank"><img src={{asset('images/facebook_Icon.png')}}></a></li>
              <li class="hidden-xs" id="nav-refer"><a href="#refer">SIGNUP FOR SHINE</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      @yield('content')

      <ul class="footer">
        <h1>SHINE</h1>
        <div id="footer-social">
            <li><a href="https://twitter.com/ShineText" target="_blank"><img src={{asset('images/twitter_yellow.png')}}></a></li>
            <li><a href="https://instagram.com/ShineText" target="_blank"><img src={{asset('images/instagram_yellow.png')}}></a></li>
            <li><a href="https://www.facebook.com/Shine-Text" target="_blank"><img src={{asset('images/facebook_yellow.png')}}></a></li>
            <div id="privacy-policy-link"><li><a href="{{ URL::route('privacy-policy') }}" target="_blank">PRIVACY POLICY</a></li></div>
        </div>
      </ul>
    </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script>
      $('.carousel').carousel({
          interval: 3000
      })
  </script>
</html>


