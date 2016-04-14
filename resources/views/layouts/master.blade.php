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
        <link href="{{ asset('css/shine.css') }}" rel="stylesheet" type="text/css" >

        @yield('page-css')

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
      @yield('content')

      <footer>
        <h1>
            <a href="/">SHINE</a>
        </h1>
        <ul>
            <li>
                <a href="{{ URL::route('faq') }}">FAQ</a>
            </li>
            <li>
                <a href="{{ URL::route('jobs') }}">JOBS</a>
            </li>
            <li>
                <a href="{{ URL::route('privacy-policy') }}">PRIVACY POLICY</a>
            </li>
            <li class="social-icon">
                <a href="https://www.facebook.com/Shine-Text" target="_blank">
                    <img src={{asset('images/facebook_yellow.png')}}>
                </a>
            </li>
            <li class="social-icon">
                <a href="https://instagram.com/ShineText" target="_blank">
                    <img src={{asset('images/instagram_yellow.png')}}>
                </a>
            </li>
            <li class="social-icon">
                <a href="https://twitter.com/ShineText" target="_blank">
                    <img src={{asset('images/twitter_yellow.png')}}>
                </a>
            </li>
        </ul>
      </footer>
    </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</html>


