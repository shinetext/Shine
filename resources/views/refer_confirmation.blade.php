<!DOCTYPE html>
<html>
    <head>
        <title>Shine</title>
        <link href='https://fonts.googleapis.com/css?family=Fira+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="fonts/BebasNeueBold.otf" type="text/css" charset="utf-8" /> 
        <link rel="stylesheet" href="fonts/BebasNeueRegular.otf" type="text/css" charset="utf-8" /> 
        
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

        .nav-bar { 
            list-style:none; 
        }

        #right {
            padding-right: 100px;
        }

        #right li { 
            display: inline; 
            float: right;
            padding: 3% 0 0.5% 0;
            margin-top: -40px;
        }

        #right li img {
            max-width: 70%;
            max-height: auto;
        }

        @media screen and (max-width: 1000px) {
            #right {
                display: none;
            }
        }

        #left {
            padding-left: 100px;
        }

        #left li {
            display: inline;
            float: left;
            display: block;
            margin: -5px 0 0 -30px;
        }

        #left li img {
            padding: 0 0 0 15px;
        }

	    .page {
	    	background-color: #E6E6E6;
	    	clear: both;
	    	overflow: scroll;
	    }

        .page h1 {
            font-family: 'Bebas Neue Bold';
            text-align: center;
            margin-top: 10%;
            font-size: 50px;
            padding-top: 10%;
            margin-bottom: 100%;
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
    	<div class="nav-bar">
    		<ul id="left">
    			<li><a href={{ URL::to('/') }}><img src={{asset('images/shine2_logo.png')}}></a></li>
    		</ul>
            
            <ul id="right">
                <li><a href="https://twitter.com/ShineText" target="_blank"><img src={{asset('images/twitter_Icon.png')}}></a></li>
                <li><a href="https://instagram.com/ShineText" target="_blank"><img src={{asset('images/instagram_Icon.png')}}></a></li>
                <li><a href="https://www.facebook.com/Shine-Text" target="_blank"><img src={{asset('images/facebook_Icon.png')}}></a></li>
            </ul>
    	</div>

    	<div class="page">
	    	<h1>SUCCESS! THANKS FOR SIGNING YOUR FRIEND(S) UP FOR SHINE! #SHINEON</h1>
		</div>
    </body>
</html>