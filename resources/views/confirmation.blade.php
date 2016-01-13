<!DOCTYPE html>
<html>
    <head>
        <title>Shine</title>
        <link rel="shortcut icon" href="//shinetext.herokuapp.com/images/favicon.ico" type="image/vnd.microsoft.icon" />
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Fira+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="fonts/BebasNeueBold.otf" type="text/css" charset="utf-8" /> 
        <link rel="stylesheet" href="fonts/BebasNeueRegular.otf" type="text/css" charset="utf-8" /> 
        <link href="{{ asset('css/confirmation.css') }}" rel="stylesheet" type="text/css" >
        
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
                <a class="navbar-brand" href={{ URL::to('/') }}><img src={{asset('images/shine2_logo.png')}}></a>
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden-xs" id="social-icons"><a href="https://twitter.com/ShineText" target="_blank"><img src={{asset('images/twitter_Icon.png')}}></a></li>
                    <li class="hidden-xs" id="social-icons"><a href="https://instagram.com/ShineText" target="_blank"><img src={{asset('images/instagram_Icon.png')}}></a></li>
                    <li class="hidden-xs" id="social-icons"><a href="https://www.facebook.com/Shine-Text" target="_blank"><img src={{asset('images/facebook_Icon.png')}}></a></li>
                </ul>
            </div><!-- /.container-fluid -->
        </nav>

    	<div class="page">
        	<div class="success">
        		<h1>Success! You're now signed up for Shine.</h1>
        		<h3>Spread the motiv-affirmation and share with friends!</h3>
        	</div>

            <div class="refer-a-friend">
                <form action="https://secure.mcommons.com/profiles/join" method="post">                    
                    <input type="hidden" name="opt_in_path[]" value="OP4B1A27AC508266A1F4373419CE1BE391" />
                        <input type="hidden" name="redirect_to" value={{ URL::route('refer_confirmation') }} />
                    
                    <div class="col-md-4" id="referral">
                        <input required="required" placeholder="YOUR NAME" type="text" name="person[first_name]" id="person_first_name" /></br></br>
                        <input required="required" placeholder="YOUR PHONE NUMBER" type="text" name="person[phone]" id="person_phone" /></br>
                    </div>

                    <div class="col-md-4" id="referral">
                        <input required="required" placeholder="YOUR FRIEND'S NUMBER" type="text" name="friends[]"/><br /> <input type="hidden" name="friends_opt_in_path" value="OPE8B3F738CF07CE0C3AFA3F45A5E155ED" /><br>
                        <input placeholder="YOUR FRIEND'S NUMBER (OPTIONAL)" type="text" name="friends[]"/><br /> <input type="hidden" name="friends_opt_in_path" value="OPE8B3F738CF07CE0C3AFA3F45A5E155ED" /><br>               
                    </div>

                    <div class="col-md-4" id="referral">            
                        <input placeholder="YOUR FRIEND'S NUMBER (OPTIONAL)" type="text" name="friends[]"/><br /> <input type="hidden" name="friends_opt_in_path" value="OPE8B3F738CF07CE0C3AFA3F45A5E155ED" /><br>
                        <input placeholder="YOUR FRIEND'S NUMBER (OPTIONAL)" type="text" name="friends[]"/><br /> <input type="hidden" name="friends_opt_in_path" value="OPE8B3F738CF07CE0C3AFA3F45A5E155ED" /><br>
                    </div>

                    <div style="clear: both;">
                    <input type="submit" value="SUBMIT" class="signup_button" id="center"/>
                    </div>  
                </form>
            </div>

            <ul class="footer">
                <h1>SHINE</h1>
                  <div id="footer-social">
                      <li><a href="https://twitter.com/ShineText" target="_blank"><img src={{asset('images/twitter_yellow.png')}}></a></li>
                      <li><a href="https://instagram.com/ShineText" target="_blank"><img src={{asset('images/instagram_yellow.png')}}></a></li>
                      <li><a href="https://www.facebook.com/Shine-Text" target="_blank"><img src={{asset('images/facebook_yellow.png')}}></a></li>
                      <div id="privacy-policy-link"><li><a href="{{ URL::route('privacy-policy') }}" target="_blank">PRIVACY POLICY</a></li></div>
                  </div>
            </ul>
    	</div>
    </body>
</html>