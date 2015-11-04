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
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" >

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

        <script>
          function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-68971267-1', 'auto');
          ga('send', 'pageview');
        </script>    
    </head>

    <body>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only"></span><img src={{asset('images/hamburger2.png')}}>
            </button>
            <a class="navbar-brand" href="#"><img src={{asset('images/shine2_logo.png')}}></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle hidden-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src={{asset('images/hamburger2.png')}}></a>
                <a href="#" class="dropdown-toggle hidden-sm hidden-md hidden-lg" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EXPLORE</a>

                <ul class="dropdown-menu">
                  <li><a href="#about">ABOUT</a></li>
                  <li><a href="#testimonials">TESTIMONIALS</a></li>
                  <li><a href="#refer">REFER-A-FRIEND</a></li>
                  <li><a href="#contact">CONTACT</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="hidden-xs" id="social-icons"><a href="https://twitter.com/ShineText" target="_blank"><img src={{asset('images/twitter_Icon.png')}}></a></li>
              <li class="hidden-sm hidden-md hidden-lg" id="social-icons"><a href="https://twitter.com/ShineText" target="_blank">Follow us on Twitter</a></li>
              <li class="hidden-xs" id="social-icons"><a href="https://instagram.com/ShineText" target="_blank"><img src={{asset('images/instagram_Icon.png')}}></a></li>
              <li class="hidden-sm hidden-md hidden-lg" id="social-icons"><a href="https://instagram.com/ShineText" target="_blank">Follow us on Instagram</a></li>
              <li class="hidden-xs" id="social-icons"><a href="https://www.facebook.com/Shine-Text" target="_blank"><img src={{asset('images/facebook_Icon.png')}}></a></li>
              <li class="hidden-sm hidden-md hidden-lg" id="social-icons"><a href="https://www.facebook.com/Shine-Text" target="_blank">Like us on Facebook</a></li>
              <li class="hidden-xs" id="nav-refer"><a href="#">REFER FRIENDS</a></li>
              <li class="hidden-sm hidden-md hidden-lg" id="nav-refer"><a href="#">REFER FRIENDS</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

<!--       <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">hello</div>
          <div class="col-md-4">hi</div>
        </div> -->
        <div class="header">    
            <div class="text_bubble_column">
                <div id="shine_text_bubble">
                    <p>Welcome to Shine! We all need a little help to get through the day & feel our best self. We'll text you daily work hacks & reminders of why you're a badass.</p>
                </div>

                <div id="user_text_bubble">
                    <p>So pumped!</p>
                </div>

                <div id="shine_text_bubble_2">
                    <p>Glad to hear it. You're going to crush it today. #ShineOn.</p>
                </div>
            </div>

            <div id="logo_column">
                <img src={{asset('images/shine_logo.png')}}>

                <h3>A daily text so you can slay today.</h3>

                <form action="https://secure.mcommons.com/profiles/join" method="post">                    
                    <input type="hidden" name="opt_in_path[]" value="OP4B1A27AC508266A1F4373419CE1BE391" />
                    <input type="hidden" name="redirect_to" value={{ URL::route('confirmation') }} />

                    <input required="required" placeholder="FIRST NAME" type="text" name="person[first_name]" id="person_first_name" /></br>
                    
                    <!-- <input placeholder="LAST NAME (OPTIONAL)" type="text" name="person[last_name]" id="person_last_name" /></br> -->

                    <input required="required" placeholder="PHONE NUMBER" type="text" name="person[phone]" id="person_phone" /></br>
          
                    <input required="required" placeholder="BIRTHDAY" onfocus="(this.type='date')" id="person_birthday" name="person[birthday]" size="30" type="text" /></br>   

                    <input placeholder="EMAIL ADDRESS (OPTIONAL)" id="person_email" name="person[email]" size="30" type="email" /></br>
          
                    <input type="submit" value="SIGNUP" class="signup_button"/>
                </form>
                
                <!-- <span style="font-size:80%"><a href="https://www.mobilecommons.com/about/terms-and-conditions/">Msg &amp; Data Rates May Apply.</a><br />Text <b>STOP</b> to opt out. No purchase necessary.<br />Expect 4 msgs/mo. <a href="https://www.mobilecommons.com/about/terms-and-conditions/privacy-policy/">Terms and Conditions</a></span> -->
            </div>
        </div>

    </body>
</html>


