<!DOCTYPE html>
<html>
<head>
    <title>Shine</title>
    <link rel="shortcut icon" href={{asset('images/favicon.ico')}}>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
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

		.message {
			font-family: "Bebas Neue Bold";
			background-color: #E6E6E6;
			font-size: 100px;
			text-align: center;
			padding: 20% 0 100% 0;
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

	<div class="message">
		<p>Blog Coming Soon</p>
	</div>
</body>
</html>